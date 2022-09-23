<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Categories';

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
            'slug' => [
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
    * Get the Menu associated with the Category.
    * Defining Relationships: has Many
    */
    public function Menu()
    {
        return $this->hasMany(Menu::class,'Category_Id','id');
    }

    /**
    *
    * Get the Recipe Costs associated with the Category.
    * Defining Relationships: has Many
    */
    public function RecipeCosts()
    {
        return $this->hasMany(RecipeCosts::class,'Category_Id','id');
    }
}
