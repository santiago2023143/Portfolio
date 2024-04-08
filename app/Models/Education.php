<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'grade_level',
        'year_graduated',
        'name_of_school',
        'details',
    ];
}
