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
     * Eloquent Relationships
     * Type:belongsTo
     */

    /**
     * Eloquent Relationships
     * Type: Has One or Has Many
     */



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
