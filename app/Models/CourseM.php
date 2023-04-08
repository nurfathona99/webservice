<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseM extends Model
{
    protected $table = 'courses';
       protected $fillable = ['name', 'description', 'price', 'institution_id'];
       protected $guarded = ['id'];
}
