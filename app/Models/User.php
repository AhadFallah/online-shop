<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'slug'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function scopeFilter($query, $filters)
    {
        if(($isAdmin = $filters['is_admin'] ?? null) !== null && $filters['is_admin'] !== 'all') {
            $query->where('is_admin', $isAdmin);
        }

        if(($isActive = $filters['is_active'] ?? null) !== null && $filters['is_active'] !== 'all') {
            $query->where('is_active', $isActive);
        }
        if(($isStaff = $filters['is_staff'] ?? null) !== null && $filters['is_staff'] !== 'all') {
            $query->where('is_staff', $isStaff);
        }
        if(($isSeller = $filters['is_seller'] ?? null) !== null && $filters['is_seller'] !== 'all') {
            $query->where('is_seller', $isSeller);
        }
        if (($search = $filters['search'] ?? null) !== null) {
            $query->where('name', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
        }

        return $query;

    }
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
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    public function login()
    {
        return $this->hasMany(Login::class);
    }
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
    public function allBookmarks()
    {
        return $this->belongsToMany(ptype_seller::class, 'bookmarks', 'user_id', 'ptype_seller_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
