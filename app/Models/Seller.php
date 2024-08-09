<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\User;

class Seller extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'card',
        'shaba',
        'debtor',
        'creditor',
        'slug',
        'is_active'
    ];
    public function Sluggable(): array
    {
        return [
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
