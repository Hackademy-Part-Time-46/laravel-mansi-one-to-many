<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'pages', 'image', 'author_id'];

    public function author()
    {
        //return $this->hasOne(Author::class);
        return $this->belongsTo(Author::class);
    }
}
