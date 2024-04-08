<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'name',
        'birthday',
        'place_of_birth',
        'address',
        'age',
        'phone',
        'email',
        'degree',
    ];
}
