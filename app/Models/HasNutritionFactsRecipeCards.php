<?php

/**
 * This Models Class Relationship With Recipe Costs Models Part
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasNutritionFactsRecipeCards extends Model
{
    use HasFactory;
    use Sluggable;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'Has_Nutrition_Facts_Recipe_Cards';

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

        'Recipe_Cards_Id',

        'Calories_Serving',
        'Carbs_Serving',
        'Protein_Serving',
        'Fat_Serving',

        'Ingredients_Name',
        'Calories_Unit',
        'Calories_Unit_Name',
        'Carbs_Unit',
        'Carbs_Unit_Name',
        'Protein_Unit',
        'Protein_Unit_Name',
        'Fat_Unit',
        'Fat_Unit_Name',
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
