<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'notes',
        'notes_1',
        'notes_2',
        'notes_3',
        'notes_4',
        'notes_5',
    ];
}
