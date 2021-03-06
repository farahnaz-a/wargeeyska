<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'        
    ];


    public function getSubcategory(){


        return $this->hasMany('App\Models\SubCategory');

    }
    public function getblogs(){
        return $this->hasMany('\App\Models\Blog');
    }

}
