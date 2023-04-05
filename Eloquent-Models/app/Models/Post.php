<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; // optional 
    public $fillable = ['title','body']; // required when using 'create' method to insert data into database
    public $hidden = [];
    
}