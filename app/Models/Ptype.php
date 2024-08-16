<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;

class Ptype extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'context',

    ];
    public $timestamps = false;
    public function scopeFilter($query, $filter)
    {
        if (($search = $filters['search'] ?? null) !== null) {
            $query->where('name', 'like', '%' . $search . '%');
        }

    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function sellers()
    {
        return $this->belongsToMany(Seller::class)->using('ptype_seller');
    }
}
