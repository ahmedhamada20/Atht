<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'notes',
        'image',
        'image_two',
        'notes_1',
        'notes_2',
        'notes_3',
        'notes_4',
        'notes_5',
    ];


    protected $appends = ['image'];

    public function getImageAttribute()
    {
        return $this->photo != null ? asset('dash/pictures/blog/' . $this->id .'/'.$this->photo->Filename ) : null;
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
