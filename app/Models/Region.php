<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    // 1 : M
    public function Province() {
        //                    Model         FK       PK
        return $this->hasMany(Province::class,'region_id','id');
    }
    public function Country() {
        //                    Model         FK       PK
        return $this->belongsTo(Country::class,'county_id','id');
    }
}
