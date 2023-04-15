<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'notes',
        'header_products',
        'header_collections',
        'header_category',
        'header_blogs',
        'notes_1',
        'notes_2',
        'notes_3',
        'notes_4',
        'notes_5',
    ];


    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/Setting/' . $this->id .'/'.$this->photo->Filename ) : null;
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}