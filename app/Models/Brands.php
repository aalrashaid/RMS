<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class Brands extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Brands';

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
     * @var array
     */
    protected $fillable = [

        'user_id',

        'Countries_id',
        'Cuisine_id',
        'Thumbnail_Id',

        'Slug',
        'Brand_UID',
        'Name_Brand',
        'Description',
        //'Brand_Loga',
        'Address',
        'City',
        'State',
        'Zip_Code',
        //'Region',
        //'Country',
        'Moblie',
        'Whatsapp',
        'Email',
        'Web',
        'Facebook',
        'Youtube',
        'Instagram',
        'Twitter',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'NameBrand'
            ]
        ];
    }

    /**
    *
    * Eloquent Relationships Type:belongsTo
    *
    */

    /**
    *
    * Get the user that owns the Brands.
    * Defining Relationships: belongsTo
    */
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','Id');
    }

    /**
    *
    * Get the Countries that owns the Brands.
    * Defining Relationships: belongsTo
    */
    public function Countries()
    {
        return $this->belongsTo(Countries::class,'Countries_id','id');
    }

    /**
    *
    * Get the Cuisine that owns the Brands.
    * Defining Relationships: belongsTo
    */
    public function Cuisine()
    {
        return $this->belongsTo(Cuisine::class,'Cuisine_id','id');
    }


    /**
    *
    * Eloquent Relationships Type: Has One or Has Many
    *
    */

    /**
    *
    * Get the Inventory associated with the Brands.
    * Defining Relationships: has Many
    */
    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'Brands_Id' ,'id');
    }

    /**
    *
    * Get the Menu associated with the Brands.
    * Defining Relationships: has Many
    */
    public function menu()
    {
        return $this->hasOne(Menu::class, 'Brands_Id','id');
    }

    /**
    *
    * Get the Recipe Card associated with the Brands.
    * Defining Relationships: has Many
    */
    public function recipeCard()
    {
        return $this->hasOne(RecipeCard::class,'Brands_Id','id');
    }

    /**
    *
    * Get the Recipe Card associated with the Brands.
    * Defining Relationships: has Many
    */
    public function recipeCosts()
    {
        return $this->hasMany(RecipeCosts::class,'Brands_Id','id');
    }

    /**
    *
    * Get the Supplier Item associated with the Brands.
    * Defining Relationships: has Many
    */
    public function SupplierItem()
    {
        return $this->hasMany(SupplierItem::class,'Brands_Id','Id');
    }



    /**
     * The Wirting All Function
     */

    /**
     * Uploads Logo For in Create froms
     * @param  App\Http\Requests
     */
    public function logoUplaod($request)
    {
        if ($request->hasFile('thumbnails')) {
            $name = $request->file('thumbnails')->getClientOriginalName();
            $path = $request->file('thumbnails')->storeAs('public/Brands/Logos', $name);
        }
    }

    /**
     * The set Logo For profile Brand
     */
    public function setLoga()
    {
    }
}
