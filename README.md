# SI Akreditasi FT 
Sebuah demo website SI Akreditasi FT

How to run in local:
- Clone your project
- Create empty database `db_si_akre`
- Go to the folder application using cd command on your cmd or terminal : `cd si_akre`
- Run `composer install` on your cmd or terminal
- Copy `.env.example` file to `.env` on the root folder. You can type `copy .env.example .env` if using command prompt Windows or `cp .env.example .env` if using terminal, Ubuntu
- Open your `.env` file and change the database name (DB_DATABASE) to `si_akre_db`, username `root` and password ```""``` field correspond to your configuration.
- Run `php artisan key:generate`
- Run `php artisan migrate:fresh --seed`
- Run `php artisan serve`
- Go to http://localhost:8000/
