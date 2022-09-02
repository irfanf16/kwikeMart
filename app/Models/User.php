<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'stripe_customer_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'device_token',
        'coins',
        'refer_code'
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->{$post->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getKeyType()
    {
        return 'string';
    }

    public $incrementing = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'id'=>'string'
    ];
    public function roles(){
        return $this->belongsToMany(Role::class, 'users_roles')->withTimestamps();
    }

    public function hasAnyRoles($roles){
        if($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }
        return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }
    public function store(){
        return $this->belongsToMany(Store::class,'user_store')->withTimestamps();
    }
    public function favorites(){
        return $this->belongsToMany(User::class,'user_favorites','user_id','product_store_id');
    }
    public function cart(){
        return $this->hasMany(Cart::class,'user_id','id');
    }
    public function addresses(){
        return $this->hasMany(UserAddress::class,'user_id','id');
    }
}
