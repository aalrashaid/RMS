<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

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
        'Supplier_Id',
        'Inventory_UID',
        'Name_Item',
        'Description_Item',
        'SKU',
        'Barcode',
        'Serial_Number',
        'Category_Item',
        'Item_Size',
        'Unit_Price',
        'Quantity_In_Stock',
        'Inventory_Value',
        'In_Stock',
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

    //Eloquent Relationships - belongsTo

    //Eloquent Relationships - Has One  or Has Many
}
