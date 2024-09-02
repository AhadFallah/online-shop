<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\Ptype;
use App\Models\Seller;
use App\Models\File;

class ptype_seller extends Pivot
{
    use HasFactory;
    protected $table = 'ptype_seller';
    public function scopeFilter($query, $filter)
    {
        if (($search = $filters['search'] ?? null) !== null) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        return $query;
    }
    public function ptype()
    {
        return $this->belongsTo(Ptype::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function file()
    {
        return $this->belongsToMany(File::class, 'file_ptype_seller', 'ptypeSellerId', 'file_id');
    }
    public function coverPic()
    {
        return $this->belongsToMany(File::class, 'file_ptype_seller', 'ptypeSellerId', 'file_id')->where('type', 'cover');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'ptype_seller_id', 'id');
    }
}
