<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'ptype_seller_id',
        'user_id',
    ];
    public $timestamps=false;
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function bookmarks()
    {
        return $this->belongsToMany(ptype_seller::class,);
    }
}
