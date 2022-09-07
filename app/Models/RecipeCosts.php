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
     * Eloquent Relationships
     * Type:belongsTo
     */

    /**
     * Eloquent Relationships
     * Type: Has One or Has Many
     */

    /**
     * Get the user associated with the RecipeCosts.
     */
    public function user()
    {
        return $this->hasOne(RecipeCosts::class);
    }

    /**
     * Get the Brands associated with the RecipeCosts.
     */
    public function brands()
    {
        //Brands_Id
        return $this->hasOne(Brands::class);
    }

    /**
     * Get the Category associated with the RecipeCosts.
     */
    public function category()
    {
        //Category_Id
        return $this->hasOne(Category::class);
    }

    /**
     * Get the Menu associated with the RecipeCosts.
     */
    public function menu()
    {
        //Menus_Id
        return $this->hasOne(Menu::class);
    }

    /**
     * The Wirting All Function 
     */
    
}
