# Learn-Laravel-Framework
## Lesson 1 ' test ' :
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
