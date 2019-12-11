<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Date extends Model
{
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIPS
    |--------------------------------------------------------------------------
    */

    // NORMAL

    /**
     * Causes relationship (Many to Many).
     * 
     * @return \App\Cause
     */

    public function causes()
    {
        return $this->belongsToMany(Cause::class);
    }

    /**
     * Services relationship (Many to Many).
     * 
     * @return \App\Service
     */

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    /**
     * Observations relationship (One to Many).
     * 
     * @return \App\Observation
     */

    public function observations()
    {
        return $this->hasMany(Observation::class);
    }

    // INVERSE

    /**
     * Status relationship (One to Many - Inverse).
     * 
     * @return \App\Status
     */

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Users relationship (One to Many - Inverse).
     * 
     * @return \App\User
     */

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    /**
     * Patients relationship (One to Many - Inverse).
     * 
     * @return \App\Patient
     */

    public function patient()
    {
        return $this->belongsTo(Patient::class)->withTrashed();
    }

    public function getPatient()
    {
        $patient = $this->patient()->first();
        if ($patient) {
            return $patient->name. ' ' . $patient->paternal_lastname. ' ' . $patient->maternal_lastname;
        }
        return "";
    }

    public function getStatus()
    {
        $state = $this->status()->first();
        if ($state) {
            return $state->description;
        }
        return "";
    }
    public function getStatusNameAttribute()
    {
        $state = $this->status()->first();
        if ($state) {
            return $state->name;
        }
        return "";
    }
    public function getStatusDescriptionAttribute()
    {
        $state = $this->status()->first();
        if ($state) {
            return $state->description;
        }
        return "";
    }

    /*
    |--------------------------------------------------------------------------
    | LARATABLES
    |--------------------------------------------------------------------------
    */

    /**
     * Additional columns to be loaded for datatables.
     *
     * @return array
     */
    public static function laratablesAdditionalColumns()
    {
        return ['status_id', 'patient_id', 'uuid'];
    }

    public static function laratablesId($date)
    {
        $folio = str_pad($date->id, 8, '0', STR_PAD_LEFT);
        return "<span>$folio</span>";
    }

    public static function laratablesCustomSsn($date)
    {
        $ssn = !empty($date->patient->ssn->ssn) > 0 ? $date->patient->ssn->ssn : false;
        if ($ssn) {
            return "<span>$ssn</span>";
        }
        return '<span class="text-muted"><i>N/A</i></span>';
    }

    public static function laratablesAttentionDate($date)
    {
        $attention_date = Carbon::parse($date->attention_date)->format('d/m/Y h:i A');
        return "<span>$attention_date</span>";
    }

    public static function laratablesCustomFullname($date)
    {
        return $date->patient->fullname;
    }

    public static function laratablesCustomStatus($date)
    {
        $class = $date->statusName == 'pagado' ? 'success' : ($date->statusName == 'cancelado' ? 'danger' : '');
        return "<span class='badge badge-pill w-100 badge-$class'>$date->statusDescription</span>";
    }

    public static function laratablesCustomAction($date)
    {
        return view('dates.buttons.datatable_dates_actions', compact('date'))->render();
    }

    /**
     * Specify row class name for datatables.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesRowClass($date)
    {
        return $date->statusName;
    }

    /**
     * Additional columns to be loaded for datatables.
     *
     * @return array
     */
    public static function laratablesSearchableColumns()
    {
        return ['patient.name', 'patient.maternal_lastname', 'patient.paternal_lastname', 'status.description', 'status.name'];
    }
}
