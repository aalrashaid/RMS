<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
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

        'User_id',

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
    *
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
    * Eloquent Relationships
    * Defining Relationships: belongsTo
    *
    */

    /**
    *
    * Get the user that owns the Brands.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
    *
    * Get the Countries that owns the Brands.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function Countries() : BelongsTo
    {
        return $this->belongsTo(Countries::class);
    }

    /**
    *
    * Get the Cuisine that owns the Brands.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function Cuisine() :BelongsTo
    {
        return $this->belongsTo(Cuisine::class);
    }


    /**
    *
    * Eloquent Relationships
    * Defining Relationships: Has One Or has Many
    *
    */

    /**
    *
    * Get the Inventory associated with the Brands.
    * Relationships: has Many
    *
    * @return HasMany
    */
    public function inventory() : HasMany
    {
        return $this->hasMany(Inventory::class, 'Brands_Id' ,'id');
    }

    /**
    *
    * Get the Menu associated with the Brands.
    * Relationships: has One
    *
    * @return HasOne
    */
    public function menu() : HasOne
    {
        return $this->hasOne(Menu::class, 'Brands_Id','id');
    }

    /**
    *
    * Get the Recipe Card associated with the Brands.
    * Relationships: has One
    *
    * @return HasOne
    */
    public function recipeCard() : HasOne
    {
        return $this->hasOne(RecipeCard::class,'Brands_Id','id');
    }

    /**
    *
    * Get the Recipe Card associated with the Brands.
    * Relationships: has Many
    *
    * @return HasMany
    */
    public function recipeCosts() : HasMany
    {
        return $this->hasMany(RecipeCosts::class,'Brands_Id','id');
    }

    /**
    *
    * Get the Supplier Item associated with the Brands.
    * Relationships: has Many
    *
    * @return HasMany
    */
    public function SupplierItem() : HasMany
    {
        return $this->hasMany(SupplierItem::class,'Brands_Id','Id');
    }



    /**
    *
    * The Wirting All Function
    *
    */

    /**
    *
    * Function: The Brand UID  Generator Name
    *
    *
    */
    public function generatorBrandUID()
    {
        // Most Be Year-SYS-Number Unique
        $nameRandom = Str::random(25);
    }

    /**
    *
    * Function: The Brand UID Save Name in DB
    *
    *
    */
    public function BrandUID()
    {
        //

    }

    /**
    * Uploads Logo For in Create froms
    * @param  App\Http\Requests
    */
    public function logoUplaod($request)
    {
        // if ($request->hasFile('thumbnails')) {
        //     $name = $request->file('thumbnails')->getClientOriginalName();
        //     $path = $request->file('thumbnails')->storeAs('public/Brands/Logos', $name);
        // }

        // Storage::disk($path)->put('thumbnails', 'Contents');

        // $contents = Storage::get('Contents');

        // if (Storage::disk($path)->exists('Contents')) {
        //      // ...
        // }

        // if (Storage::disk($path)->missing('Contents')) {
        //     // ...
        // }
    }


}
