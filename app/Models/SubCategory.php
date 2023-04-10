<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'notes',
        'image',
        'notes_1',
        'notes_2',
        'notes_3',
        'notes_4',
        'notes_5',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
