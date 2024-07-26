<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Pagination\LengthAwarePaginator;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'slug',
        'status',
        'email',
        'password',
    ];

   public function scopeSearch($query):LengthAwarePaginator
   {
        $search = Request()->query('name');
        if(empty($search)){
        return $query->orderBy('id','asc')->latest()->paginate(5);
        }else{
        return $query
        ->orWhere('firstname', 'like' , "%{$search}%")
        ->orWhere('lastname', 'like' , "%{$search}%")
        ->orWhere('name', 'like' , "%{$search}%")
        ->orWhere('slug', 'like' , "%{$search}%")
        ->orWhere('email', 'like' , "%{$search}%")
        ->orWhere('status', 'like' , "%{$search}%")
        ->orderBy('id','asc')->latest()->paginate(5);
        }
   }
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
    ];
}
