<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'status'
    ];

    public function multimedia()
    {
        return $this->belongsToMany(Multimedia::class)->withTimestamps();
    }
}
