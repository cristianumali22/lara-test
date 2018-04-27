<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    public $fillable = ['title', 'isbn', 'author', 'publisher', 'yearPublished', 'category'];
}   
