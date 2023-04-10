<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'sub_category_id',
        'color_id',
        'notes',
        'rating',
        'price_sub',
        'price',
        'notes_1',
        'notes_2',
        'notes_3',
        'notes_4',
        'notes_5',
        'notes_6',
        'notes_7',
        'notes_8',
        'notes_9',
        'notes_10',
        'notes_11',
        'notes_12',
        'notes_13',
        'notes_14',
        'notes_15',
        'notes_16',
        'notes_17',
        'notes_18',
        'notes_19',
        'notes_20',
    ];


    public function sub_category_id()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class,'color_id');
    }
}
