<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $gurded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
    public function blog(){
        return $this->belongsTo(Blog::class, 'blog_id','id');
    }
}
