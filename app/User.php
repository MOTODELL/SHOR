<?php

namespace App;

use App\Notifications\MailResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->{$user->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

     public function getBirthplace()
    {
        $birthplace = $this->birthplace()->first();
        if ($birthplace) {
            return $birthplace->description;
        }
        return "";
    }

    public function hasDependency(String $dependency)
    {
        if ($this->dependency) {
            $dependency = $this->dependency->name == $dependency;
            if($dependency) return true;
        }
        return false;
    }

    public function hasADependency()
    {
        if ($this->dependency) {
            return true;
        }
        return false;
    }

    public function hasASex()
    {
        if ($this->sex === null || empty($this->sex) || (($this->sex != "H") && ($this->sex != "M"))) {
            return false;
        }
        return true;
    }

    public function getFullnameAttribute()
    {
        return $this->name . " " . $this->paternal_lastname . " " . $this->maternal_lastname;
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    // NORMAL

    /**
     * Roles relationship (Many to Many).
     * 
     * @return \App\Role
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Dates relationship (Many to Many).
     * 
     * @return \App\Date
     */
    public function dates()
    {
        return $this->belongsToMany(Date::class);
    }

    // INVERSE

    /**
     * Dependencies relationship (One to Many - Inverse).
     * 
     * @return \App\Dependency
     */
    public function dependency()
    {
        return $this->belongsTo(Dependency::class)->withTrashed();
    }

    /**
     * State relationship (One to Many - Inverse).
     * 
     * @return \App\State
     */

    public function birthplace()
    {
        return $this->belongsTo(State::class);
    }

    /*
    |--------------------------------------------------------------------------
    | OWN METHODS
    |--------------------------------------------------------------------------
    */

    /**
     * Abort unless the user has the authorize role for the controller action.
     * 
     * @return bool
     */

    public function authorizeRoles($roles)
    {
        abort_unless($this->hasAnyRole($roles), 401);
        return true;
    }

    /**
     * Search and find if the user has, at least, one of the the especified roles.
     * 
     * @return bool
     */
    
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true; 
            }   
        }
        return false;
    }

    /**
     * Search and find if the user has the specified role.
     * 
     * @return bool
     */
    
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
    public function hasARole()
    {
        if ($this->roles()->first()) {
            return true;
        }
        return false;
    }
    public function getDependency()
    {
        $dependency = $this->dependency()->first();
        if ($dependency) {
            return $dependency->description;
        }
        return "";
    }
    public function getRoleDescription()
    {
        $role = $this->roles()->first();
        if ($role) {
            return $role->description;
        }
        return "";
    }
    public function getRoleNameAttribute()
    {
        $role = $this->roles()->first();
        if ($role) {
            return $role->name;
        }
        return "";
    }

    public function getRole()
    {
        $role = $this->roles()->first();
        if ($role) {
            return $role->name;
        }
        return "";
    }

    public function getUsernameAttribute($value)
    {
        return strtolower($value);
    }
}
