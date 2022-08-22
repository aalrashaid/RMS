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
    protected $table = 'brands';

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
        'NameBrand',
        'Slug',
        'Description',
        'BrandLogas',
        'Address',
        'ZipCode',
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

    //Eloquent: Relationships

    /**
     * Relationships: one to one 
     * Get the user that owns the Brands.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * this funcation to  loga Response
     */
    public function setLoga($filename)
    {
        $path = storage_path('public/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    /**
     * This funcation to logo uploads by storage
     */
    public function uploadLoga(Request $request)
    {
        // cache the file
        $file = $request->file('BrandLogas');

        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();

        // save to storage/app/photos as the new $filename
        $path = $file->storeAs('public/Brands/Loga', $filename);

        dd($path);
    }
}
