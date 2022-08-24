<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class HasIngredientsRecipeCards extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Has_Ingredients_Recipe_Cards';

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
        'Recipe_Card_Id',
        'Ingredients_Name',
        'Ingredients_Unit',
        'Ingredients_Unit_Name',
        
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

    //Eloquent Relationships - belongsTo



    //Eloquent Relationships - Has One  or Has Many

    /**
     * Relationships: One to Many
     * Get the RecipeCard associated with the Has Ingredients Recipe Cards.
     */
    public function RecipeCard()
    {
        return $this->hasOne(RecipeCard::class, 'Recipe_Card_Id', 'id');
    }
}
