## SHOR

The system for the hospital consists of a patient manager in order to optimize the emergency area in a Hospital.

-   Centralized software system
-   Hierarchy levels and permissions
-   Information protection

## Requirements

> - PHP >=7.2.0 and PHP <= 7.3 
> - MariaDB 10.2 or higher / MySQL 5.7.8 or higher / Pos
> - HTTPS connection
> - [Laravel](https://laravel.com/):	Laravel on v6.x
> - [Composer](https://getcomposer.org/): Composer >= 1.9.1
> 

## Installation Guide

- Clone or download the repository
  
    ```
    git clone https://github.com/MOTODELL/SHOR.git
    ```

- Once inside the repository open a terminal and enter the following commands:

    ```
    composer install
    ```

- Add the .env file 
  
    ```
    cp .env.example .env
    ```

- Configure the .env file with the relevant database settings: name, type and port
  
- Generate the project key 
      
    ```
    php artisan generate: key
    ``

- Run migrations 
          
    ```
    php artisan migration --seed
    ``

- Run the application 
          
    ```
    php artisan serve
    ``

- There are one account already created
  
    ```
    username: test
    password: 12345678
    ``

- Enjoy!

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
