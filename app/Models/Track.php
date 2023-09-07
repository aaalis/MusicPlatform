<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Track extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['trackName','author_id','genre_id'];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}
