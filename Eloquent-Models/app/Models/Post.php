<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts'; // optional
    public $fillable = ['title','body']; // required when using 'create' method to insert data into database , specifying columns that i want to insert data into it
    public $hidden = [];

   // protected $guarded = [];

}
