<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

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
        'Supplier_UID',
        'Name_Supplier',
        'Company_Name',
        'Brand_Image',
        'Street',
        'Zip_Code',
        'City',
        'Province',
        'Region',
        'Country',
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
     * Eloquent Relationships
     * Type:belongsTo
     */

    /**
     * Get the Inventory that owns the Supplier.
     */
    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    /**
     * Get the SupplierItem that owns the user.
     */
    public function SupplierItem()
    {
        return $this->belongsTo(SupplierItem::class);
    }

    /**
     * Eloquent Relationships
     * Type: Has One or Has Many
     */
}
