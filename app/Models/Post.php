<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Place all the properties that are protected from mass assignment
    protected $guarded = ['id'];
    // Alternatively place all the properties that are allowed for mass assignment
//    protected $fillable = ['title', 'excerpt', 'body'];

    // The third option is to ignore the guarded or fillable rules and never
    // allow the create method for any mass assignment
}
