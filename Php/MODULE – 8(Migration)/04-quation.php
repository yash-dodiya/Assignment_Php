MODULE – 8(Migration)

Q-4:- Create All Migration for Employee management :
To generate a migration you need run a command
php artisan make:migration create_employee_table
this will generate a file in database\migrations folder.
The file consist of new class extending the migration class of LARAVEL.
The new class consist of 2 major function up() & down().
The up() function holds all information about migrating the file.

public function up()
{
    Schema::create('contacts', function (Blueprint $table) 
    {
            $table->id();
            $table->string('name');
            $table->string('mobile_no');
            $table->boolean('status');
            $table->timestamps();
    });
}

where as down() function holds information about reversing the migration action.

public function down()
{
    Schema::dropIfExists('contacts');
}

Run & Rollback The Migration
To run a migration we need to use the command
php artisan migrate
For rolling back latest migration we have command
php artisan migrate:rollback
when we have to rollback till specific steps we can pass steps in rollback command like
php artisan migrate:rollback --step=3
this will rollback the migration upto 3 step starting from latest.
Adding/Updating Columns in Table
To perform any task we need to generate a migration file similar to what we have created while creating the migration.
the only change will be there in migration name, always try to write the migration name descriptive which helps laravel to understand the table name in migrations.
For e.g. Updating the column name we should run command like
php artisan make:migration update_name_column_in_contacts_table
Read more at Laravel Doc
Column Modifiers
Column Modifiers are nothing but a predefined function available in LARAVEL Migration by using that you can make any column nullable, Set Column default and many more.
You can check the available Laravel Column Modifier.
Add/Rename/Remove Database Indexes
Laravel Migration support few types of INDEXES for e.g.
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::table('users', function (Blueprint $table) {
    $table->index('email');
});

For renaming a index you can use renameIndex() for e.g.
$table->renameIndex('email', 'mobile_no');

For dropping a index you can use dropIndex() for e.g.
$table->dropIndex('email');
Foreign Key Constraints
Laravel also provides support for creating foreign key constraints, which are used to force referential integrity at the database level.
$table->foreignId('user_id')
      ->constrained('users')
      ->cascadeOnUpdate()
      ->cascadeOnDelete();

