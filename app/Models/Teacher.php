<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    public function province(){
        return $this->belongsTo(province::class, 'province_id','id');
    }

    
    
    /*public function Province(){
        return $this->belongsTo(Province::class, 'province_id','id');
    }*/
}

