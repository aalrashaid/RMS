<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'Name_Brand',
        'Slug',
        'Description',
        'Brand_Logas',
        'Address',
        'Zip_Code',
        'City',
        'Province',
        'Region',
        'Country',
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

    //Eloquent Relationships - belongsTo

    /**
     * Get the Inventory that owns the Brands.
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

    /**
     * Get the user associated with the Brands.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }


}
