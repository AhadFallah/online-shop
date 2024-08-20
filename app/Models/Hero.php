<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    public function file(){
        return $this->belongsTo(File::class);
    }
    public function product(){
        return $this->belongsTo(ptype_seller::class,'ptype_seller_id');
    }
}
