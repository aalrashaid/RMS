<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cuisine extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Cuisines';

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
        'Name',
        'Slug',
        'Description',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'Slug' => [
                'source' => 'Name'
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
    * Eloquent Relationships Type: Has One  or Has Many
    *
    */

    /**
    *
    * Get the Brands associated with the Cuisine.
    * Eloquent Relationships: Cuisine model has One Recipes model.
    *
    * @return HasOne
    */
    public function Brands(): HasOne
    {
        return $this->hasOne(Brands::class,'Cuisine_id','id');
    }

    /**
    *
    * Get the Recipes associated with the Cuisine.
    * Eloquent Relationships: Cuisine model has One Recipes model.
    *
    * @return HasOne
    */
    public function Recipes(): HasOne
    {
        return $this->hasOne(Recipe::class,'Cuisine_id', 'id');
    }

}
