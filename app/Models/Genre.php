<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["genreName"];

    protected $hidden = ['created_at', 'updated_at', "deleted_at"];

    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
