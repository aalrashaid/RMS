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
     * The Wirting All Function
     *
     */

}
