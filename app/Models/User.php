<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    /**
    *
    * Eloquent Relationships Type:belongsTo
    *
    */

    /**
    *
    * Eloquent Relationships Type: Has One  or Has Many
    *
    */

    /**
    *
    * Get the Brands associated with the user.
    * Defining Relationships: has One
    */
    public function Brands()
    {
        return $this->hasOne( Brands::class, 'user_id', 'id' );
    }

    /**
    *
    * Get the inventory associated with the user.
    * Defining Relationships: has Many
    */
    public function inventory()
    {
        return $this->hasMany( Inventory::class, 'user_id', 'id' );
    }

    /**
    *
    * Get the Menu associated with the user.
    * Defining Relationships: has Many
    */

    public function menu()
    {
        return $this->hasMany( Menu::class, 'User_Id' ,'id' );
    }

    /**
    *
    * Get the Recipe Card associated with the user.
    * Defining Relationships: has Many
    */
    public function recipeCard()
    {
        return $this->hasMany(RecipeCard::class,'User_Id','id');
    }

    /**
    *
    * Get the Recipe Costs associated with the user.
    * Defining Relationships: has Many
    */

    public function recipeCosts()
    {
        return $this->hasMany(RecipeCosts::class,'User_Id','id');
    }

    /**
    *
    * Get the Supplier associated with the user.
    * Defining Relationships: has One
    */

    public function supplier()
    {
        return $this->hasOne( Supplier::class,'User_Id','id');
    }

    /**
    *
    * Get the Supplier Item associated with the user.
    * Defining Relationships: has Many
    */
    public function supplierItem()
    {
        return $this->hasMany( SupplierItem::class, 'User_Id','id'  );
    }

    /**
    *
    * Get the Thumbnails associated with the user.
    * Defining Relationships: has Many
    */
    public function thumbnails()
    {
        return $this->hasMany(Thumbnails::class,  'User_Id','id' );
    }

}
