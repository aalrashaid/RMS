<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\HasRecipeCosts;

use Cviebrock\EloquentSluggable\Sluggable;

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
    * Eloquent Relationships Type:belongsTo
    *
    */

    /**
    *
    * Get the user that owns the Recipe Costs.
    * Defining Relationships: belongsTo
    */
    public function user()
    {
        return $this->belongsTo(User::class,'User_Id','Id');
    }

    /**
    *
    * Get the Brands that owns the Recipe Costs.
    * Defining Relationships: belongsTo
    */
    public function brands()
    {
        return $this->belongsTo(Brands::class,'Brands_Id','id');
    }

    /**
    *
    * Get the Category that owns the Recipe Costs.
    * Defining Relationships: belongsTo
    */
    public function Category()
    {
        return $this->belongsTo(Category::class,'Category_Id','id');
    }

    /**
    *
    * Get the Recipe Card that owns the Recipe Costs.
    * Defining Relationships: belongsTo
    */
    public function RecipeCard()
    {
        return $this->belongsTo(RecipeCard::class,'Recipe_Card_Id','id');
    }

    /**
    *
    * Eloquent Relationships Type: Has One or Has Many
    *
    */

    /**
    *
    * Get the Has Recipe Costs associated with the Recipe Costs.
    * Eloquent Relationships: Has Recipe Costs model has Many Recipe Costs model.
    *
    * @return HasMany
    */
    public function HasRecipeCosts()
    {
        return $this->hanMany(HasRecipeCosts::class,'Recipe_Costs_Id','id');
    }


    /**
     * The Wirting All Function
     */

}
