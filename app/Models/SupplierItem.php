<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SupplierItem extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Supplier_Items';

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
        'Thumbnail_Id',

        'Item_UID',
        'Item_Name',
        'Item_Description',
        'Category_Item',
        'Item_Size',
        'SKU',
        'UPC',
        'Barcode',
        'Serial_Number',
        'Item_Unit_Price',

        //'Price',
        //'Quantity',
        //'Total',
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
    * Eloquent Relationships Type: belongsTo
    *
    */

    /**
    *
    * Get the user that owns the Supplier Item.
    * Defining Relationships: belongsTo
    *
    * @return belongsTo
    */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'User_Id','Id');
    }

    /**
    *
    * Get the Brands that owns the Supplier Item.
    * Defining Relationships: belongsTo
    *
    * @return belongsTo
    */
    public function brands() : BelongsTo
    {
        return $this->belongsTo(Brands::class,'Brands_Id','id');
    }

    /**
    *
    * Get the Supplier that owns the Supplier Item.
    * Defining Relationships: belongsTo
    *
    * @return belongsTo
    */
    public function supplier() : BelongsTo
    {
        return $this->belongsTo(Supplier::class,'Supplier_Id','id');
    }

    /**
    *
    * Eloquent Relationships
    * Defining Relationships: Has One Or has Many
    *
    */



}
