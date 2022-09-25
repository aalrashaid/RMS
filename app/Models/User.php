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
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'Users';

    /**
    * The primary key associated with the table.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
    * Indicates if the model's ID is auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = true;

    /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = true;

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
    * Eloquent Relationships
    * Defining Relationships: belongsTo
    *
    */

    /**
    *
    * Eloquent Relationships
    * Defining Relationships: Has One Or has Many
    *
    */

    /**
    *
    * Get the Brands associated with the user.
    *
    * @return HasOne
    */
    public function Brands() : HasOne
    {
        return $this->hasOne( Brands::class, 'user_id', 'id' );
    }

    /**
    *
    * Get the inventory associated with the user.
    *
    * @return HasMany
    */
    public function inventory() : HasMany
    {
        return $this->hasMany( Inventory::class, 'user_id', 'id' );
    }

    /**
    *
    * Get the Menu associated with the user.
    *
    * @return HasMany
    */

    public function menu() : HasMany
    {
        return $this->hasMany( Menu::class, 'User_Id' ,'id' );
    }

    /**
    *
    * Get the Recipe Card associated with the user.
    *
    * @return HasMany
    */
    public function recipeCard() : HasMany
    {
        return $this->hasMany(RecipeCard::class,'User_Id','id');
    }

    /**
    *
    * Get the Recipe Costs associated with the user.
    *
    * @return HasMany
    */

    public function recipeCosts() : HasMany
    {
        return $this->hasMany(RecipeCosts::class,'User_Id','id');
    }

    /**
    *
    * Get the Supplier associated with the user.
    *
    * @return HasOne
    */

    public function supplier() : HasOne
    {
        return $this->hasOne( Supplier::class,'User_Id','id');
    }

    /**
    *
    * Get the Supplier Item associated with the user.
    *
    * @return HasMany
    */
    public function supplierItem() : HasMany
    {
        return $this->hasMany( SupplierItem::class, 'User_Id','id'  );
    }

    /**
    *
    * Get the Thumbnails associated with the user.
    *
    * @return HasMany
    */
    public function thumbnails() : HasMany
    {
        return $this->hasMany(Thumbnails::class,  'User_Id','id' );
    }

}
