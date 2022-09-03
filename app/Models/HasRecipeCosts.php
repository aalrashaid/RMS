<?php

/**
 * This Models Class Relationship With Recipe Costs Models Part
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class HasRecipeCosts extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Has_Recipe_Costs';

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
        'Recipe_Costs_Id',

        'Ingredients',
        'AP_Quantity',
        'AP_Recipe_Unit',
        'AP_Recipe_Unit_Name',
        'AP_Unit_Cost',
        'EP_Recipe_Unit',
        'EP_Recipe_Unit_Name',
        'EP_Unit_Cost',
        'EP_Yield_Percentage',
        'Extension',
        'Total_Extension',
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
     * Eloquent Relationships
     * Type: Has One or Has Many
     */

    /**
     * Get the RecipeCosts associated with the Has Recipe Costs.
     */
    public function recipeCosts()
    {
        //Menus_Id
        return $this->hasMany(RecipeCosts::class);
    }

    /**
     * The Wirting All Function 
     */

    /**
     * Nutrition Facts
     * Calculator Carbs Serving
     */
}
