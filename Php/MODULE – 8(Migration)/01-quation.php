MODULE – 8(Migration)

⦁	Q-1:-How to do config database in laravel?

Laravel makes connecting with databases and running queries extremely simple. The database configuration file is app/config/database.php. In this file you may define all of your database connections, as well as specify which connection should be used by default. Examples for all of the supported database systems are provided in this file.Currently Laravel supports four database systems: MySQL, Postgres, SQLite, and SQL Server.

# Running Queries
Running A Select Query
$results = DB::select('select * from users where id = ?', array(1));

Running An Insert Statement
DB::insert('insert into users (id, name) values (?, ?)', array(1, 'Dayle'));

Running An Update Statement
DB::update('update users set votes = 100 where name = ?', array('John'));

Running A Delete Statement
DB::delete('delete from users');

Running A General Statement
DB::statement('drop table users');


CREATE DATABASE db_name;

.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test
DB_USERNAME=root
DB_PASSWORD=

database/migrations
php artisan migrate
