<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Thumbnails extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Thumbnails';

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
        'Brands_id',
        'User_id',
        'File_Name',
        'File_Size',
        'File_Path',
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
                'source' => 'Name'
            ]
        ];
    }

    /**
     * Eloquent Relationships
     * Type:belongsTo
     */

    /**
     * Get the RecipeCard that owns the user.
     */
    public function recipecard()
    {
        return $this->belongsTo(RecipeCard::class);
    }

    /**
     * Eloquent Relationships
     * Type: Has One  or Has Many
     */

    /**
     * Get the user associated with the RecipeCosts.
     */
    public function user()
    {
        return $this->hasOne(RecipeCosts::class);
    }

    /**
     * Get the Brands associated with the RecipeCosts.
     */
    public function brands()
    {
        //Brands_Id
        return $this->hasOne(Brands::class);
    }
}
