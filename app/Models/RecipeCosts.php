<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'Menus_Id',
        'Recipe_UID',
        'Recipe_Name',
        'Date_At',
        'Patch',
        'Serves',
        'Menu_Price',
        'Food_Cost_Prcentage',
        'Gross_Profit',
        'COGS',
        'COGS_Prcentage',
        'Yield_Prcentage',
        'Ideal_Gross_Selling_Price',
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

    //Eloquent Relationships - belongsTo

    //Eloquent Relationships - Has One  or Has Many
    
}
