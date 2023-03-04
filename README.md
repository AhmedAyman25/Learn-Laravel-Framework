# Learn-Laravel-Framework
## Lesson 1 ' Test ' :
contains :-  
introduction to the Routes 
<details>
    <summary>get Route</summary>
    get route used to move between pages without sending any data(requests).<br>
   
</details>
<details>
    <summary>post Route</summary>
    post route must take a request that contains data from any form.<br>
</details>
<details>
    <summary>parameter route</summary>
   Route::get('users/{name}',function(string $name){
    if($name == 'ahmed')
         return "admin: ".$name;
    else
        return 'user: '.$name;
});
</details>
<details>
    <summary>inheritance </summary>
   <li>extend()</li>
   <li>yield()</li>
   <li>section()</li>
</details>
<details>
    <summary>Blade System</summary>
   <li> The Blade is a powerful templating engine in a Laravel framework. The blade allows to use the templating engine easily, and it makes the syntax writing very simple. The blade templating engine provides its own structure such as conditional statements and loops</li>
   <li>a templating engine to design a unique layout</li>
</details>

## Lesson 2 ' Migrations ' :
contains :-  
 
<details>
    <summary>introduction to migrations</summary>
   Migrations are like version control for your database, allowing your team to define and share the application's database schema definition
</details>


<details>
    <summary>Create migration</summary>
  You may use the make:migration Artisan command to generate a database migration. The new migration will be placed in your database/migrations directory. Each migration filename contains a timestamp that allows Laravel to determine the order of the migrations<br>
  <b> Write in the terminal this command to make migration: </b> <pre> php artisan make:migration create_name_table </pre>
</details>

<details>
    <summary> Migration Structure & Create Table</summary>
   A migration class contains two methods: up and down. The up method is used to add new tables, columns, or indexes to your database, while the down method should reverse the operations performed by the up method.
   <pre>
   <?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('airline');
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('flights');
    }
};
   
   </pre>
</details>

<details>
    <summary> Migration Commands</summary>
  <b> Running Migrations: </b> <pre> php artisan migrate </pre>
   <b> If you would like to see which migrations have run thus far: </b> <pre> php artisan migrate:status </pre>
   <b> Rolling Back Migration: </b> <pre> php artisan migrate:rollback </pre>
    <b> Reset Migration: </b> <pre> php artisan migrate:reset </pre>
     <b> Refresh Migration: </b> <pre> php artisan migrate:refresh  </pre>
      <b> Fresh Migration: </b> <pre> php artisan migrate:fresh </pre>
   
</details>
 
