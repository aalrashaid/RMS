<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class RecipeCard extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Recipe_Cards';

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
        'Thumbnail_Id',
        'Title',
        'Slug',
        'Description',
        'Youtube_Video',
        'Recipe_Method',
        'Difficulty',
        'Prep_Time',
        'Cook_Time',
        'Time_Total',
        'Servings',
        'Directions',
        
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
                'source' => 'title'
            ]
        ];
    }

    //Eloquent Relationships - belongsTo

    /**
     * Get the user that owns the Brands.
     */
    public function HasIngredientsRecipeCards()
    {
        return $this->belongsTo(HasIngredientsRecipeCards::class);
    }

    /**
     * Get the user that owns the Brands.
     */
    public function HasNutritionFactsRecipeCards()
    {
        return $this->belongsTo(HasNutritionFactsRecipeCards::class);
    }

    /**
     * Get the Menu that owns the user.
     */
    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
    //Eloquent Relationships - Has One  or Has Many

    // User_Id
    // Brands_Id
    // Thumbnail_Id
}
