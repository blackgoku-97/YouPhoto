<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $tsble = 'comments';

    // Relación de muchos a uno
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación de muchos a uno
    public function image(){
        return $this->belongsTo(Image::class, 'image_id');
    }
}
