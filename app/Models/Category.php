<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'category_id'
    ];
    public function Sluggable(): array
    {

        return[
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function scopeFilter($query, $filter)
    {
        if(($search = $filter['search'] ?? null) != null) {
            $query->where('name', 'like', '%'.$search.'%');

        }
        if(($category_id = $filter['category_id'] ?? null) != null) {

            $query->where('category_id', $category_id);
        }
        return $query;
    }




















}
