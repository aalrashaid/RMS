<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Menus';

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

        'User_Id',
        'Brands_Id',
        'Category_Id',
        'Thumbnail_Id',
        'Recipe_Cards_Id',

        'Name',
        'Slug',
        'Description',
        'Price',
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
    * Eloquent Relationships
    * Defining Relationships: belongsTo
    *
    */

    /**
    *
    * Get the user that owns the Menu.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'User_Id','Id');
    }

    /**
    *
    * Get the Brands that owns the Menu.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */

    public function brands(): BelongsTo
    {
        return $this->belongsTo(Brands::class,'Brands_Id','id');
    }

    /**
    *
    * Get the Category that owns the Menu.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    *
    */

    public function Category() : BelongsTo
    {
        return $this->belongsTo(Category::class,'Category_Id','id');
    }

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
