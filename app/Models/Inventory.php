<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;
    use Sluggable;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'Inventories';

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
        'Supplier_Items_ID',

        'Inventory_UID',
        'Name_Item',
        //'Description_Item',
        'SKU',
        'Barcode',
        'Serial_Number',
        'Category_Item',
        'Item_Size',
        'Item_Unit_Price',
        'Quantity_In_Stock',
        'Inventory_Value',
        'Stock_Status',
        'Reorder_Level',
        'Reorder_Time_In_Days',
        'Quantity_In_Reorder',
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
    * Get the user that owns the Inventory.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    /**
    * Get the Brands that owns the Inventory.
    * Relationships: belongsTo
    *
    * @return BelongsTo
    */
    public function brands() : BelongsTo
    {
        return $this->belongsTo(Brands::class,'Brands_Id' , 'id');
    }

    /**
    *
    * Eloquent Relationships
    * Defining Relationships: Has One Or has Many
    *
    */


    /**
    * The Wirting All Function
    */

    /**
     * Inventory UID
     * Generator Random Inventory UID (A unique identifier)
     * Formula: YY - Time - Name - -Sequence Number
     * Example: 22-0336-TK-0001
     */
}
