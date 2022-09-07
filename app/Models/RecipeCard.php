<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\HasIngredientsRecipeCards;
use App\Models\HasNutritionFactsRecipeCards;

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
        //'Cuisine_id',
        'Thumbnail_Id',
        'Recipe_UID',
        'Title',
        'Slug',
        'Description',
        'Youtube_Video',
        'Recipe_Method',
        'Difficulty',
        'Prep_Time',
        'Cook_Time',
        'Time_Total',
        'Serves',
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

    /**
     * Eloquent Relationships
     * Type:belongsTo
     */

    /**
     * Get the user that owns the RecipeCard.
     */
    public function HasIngredientsRecipeCards()
    {
        return $this->belongsTo(HasIngredientsRecipeCards::class);
    }

    /**
     * Get the user that owns the RecipeCard.
     */
    public function HasNutritionFactsRecipeCards()
    {
        return $this->belongsTo(HasNutritionFactsRecipeCards::class);
    }

    /**
     * Get the Menu that owns the RecipeCard.
     */
    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * Eloquent Relationships
     * Type: Has One or Has Many
     */

    /**
     * Get the user associated with the RecipeCard.
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get the Brands associated with the RecipeCard.
     */
    public function brands()
    {
        //Brands_Id
        return $this->hasOne(Brands::class);
    }

    /**
     * Get the thumbnail associated with the RecipeCard.
     */
    public function thumbnail()
    {
        return $this->hasOne(Thumbnails::class);
    }

    /**
     * The Wirting All Function 
     */

    /**
     * Recipe UID
     * Generator Random Recipe UID (A unique identifier)
     * Formula:  Name Brands - YY - Time - Sequence Number
     * Example:  MC-22-0351-00001
     * Note: Be same Generator in Models RecipeCosts
     */
    public function generatorRecipeUID()
    {
        //
    }

    /**
     * Recipe UID 
     * Store in Tables function
     */
    public function storeRecipeUID()
    {
        //
    }

    /**
     * Nutrition Facts
     * Calculator Calories Serving
     */

    /**
     * Nutrition Facts
     * Calculator Carbs Serving
     */

    /**
     * Nutrition Facts
     * Calculator Protein Serving
     */

    /**
     * Nutrition Facts
     * Calculator Fat Serving
     */
    
}
