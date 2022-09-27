<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\HasRecipeCosts;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RecipeCosts extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recipe_costs';

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
        //'Menus_Id',
        'Recipe_Card_Id',

        'Recipe_UID',

        'Recipe_Name',
        'Date_At',
        'Patch',
        'Serves',
        'Menu_Recipe',
        'Food_Cost_Prcentage',
        'Gross_Profit',
        'Margin',
        'COGS',
        'COGS_Prcentage',
        'Yield_Prcentage',
        'Ideal_Gross_Selling_Recipe',
        //'YieldPortion',
        //'idealGrossSellingPrice',
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
    * Get the user that owns the Recipe Costs.
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
    * Get the Brands that owns the Recipe Costs.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function brands() : BelongsTo
    {
        return $this->belongsTo(Brands::class,'Brands_Id','id');
    }

    /**
    *
    * Get the Category that owns the Recipe Costs.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function Category() : BelongsTo
    {
        return $this->belongsTo(Category::class,'Category_Id','id');
    }

    /**
    *
    * Get the Recipe Card that owns the Recipe Costs.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function RecipeCard() : BelongsTo
    {
        return $this->belongsTo(RecipeCard::class,'Recipe_Card_Id','id');
    }

    /**
    *
    * Eloquent Relationships
    * Defining Relationships: Has One Or has Many
    *
    */

    /**
    *
    * Get the Has Recipe Costs associated with the Recipe Costs.
    * Eloquent Relationships: Has Recipe Costs model has Many Recipe Costs model.
    *
    * @return HasMany
    */
    public function HasRecipeCosts() : HasMany
    {
        return $this->hanMany(HasRecipeCosts::class,'Recipe_Costs_Id','id');
    }


    /**
    *
    * The Wirting All Function
    *
    */

}
