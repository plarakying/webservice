<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    // 1:M
    public function Region() {
                                // ชื่อ Model    FK     ,    PK
        return $this->hasMany(Region::class,'county_id','id');
    }
    
}
