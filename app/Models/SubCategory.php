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


    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('dash/pictures/subCategory/' . $this->id . '/' . $this->photo->Filename) : null;
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function sub_category()
    {
       return $this->hasMany(Product::class,'sub_category_id');
    }
}
