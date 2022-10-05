<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    use Sluggable;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'Suppliers';

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
        'User_id',
        'Thumbnail_Id',
        'Countries_id',
        'Slug',
        'Supplier_UID',
        //'Name_Supplier',
        'Company_Name',
        //'Brand_Logo',
        'Address',
        'City',
        'State',
        'Zip_Code',
        //'Country',
        //'Country',
        'Moblie',
        'Whatsapp',
        'Email',
        'Web',
        'Facebook',
        'Youtube',
        'Instagram',
        'Twitter',
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
    * Get the user that owns the Supplier.
    * Relationships: belongsTo
    *
    * @return belongsTo
    */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
    *
    * Get the Countries that owns the Supplier.
    * Relationships: belongsTo
    *
    * @return belongsTo
    */
    public function Countries() : BelongsTo
    {
        return $this->belongsTo(Countries::class);
    }

    /**
    *
    * Eloquent Relationships
    * Relationships: Has One Or has Many
    *
    */

    /**
    *
    * Get the Supplier Items associated with the Supplier.
    * Eloquent Relationships: Supplier Items model has Many Supplier model.
    *
    * @return HasMany
    */
    public function supplierItem() : HasMany
    {
        return $this->hanMany(SupplierItem::class,'Supplier_Id','Id');
    }

    /**
    *
    * The Wirting All Function
    *
    */
}
