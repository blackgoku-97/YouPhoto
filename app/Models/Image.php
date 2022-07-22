<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    // Relación One To Many / De uno a muchos
    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('id', 'desc');
    }

    // Relación One To Many
    public function likes(){
        return $this->hasMany(Like::class);
    }

    // Relación de muchos a uno
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
