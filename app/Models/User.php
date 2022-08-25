<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
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
    ];

    //Eloquent Relationships - belongsTo

    /**
     * Get the Brands that owns the user.
     */
    public function brands()
    {
        return $this->belongsTo(Brands::class);
    }

    /**
     * Get the Inventory that owns the user.
     */
    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    /**
     * Get the Menu that owns the user.
     */
    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * Get the user that owns the RecipeCosts.
     */
    public function RecipeCosts()
    {
        return $this->belongsTo(RecipeCosts::class);
    }

    //Eloquent Relationships - Has One  or Has Many

}
