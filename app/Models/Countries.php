<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Countries extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Countries';

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
        'Name',
        'Alpha-2_Code',
        'Alpha-3_Code',
        'Numeric',
        'Phone_Code',
    ];

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'Slug' => [
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
    * Get the Category that owns the Recipe Costs.
    * Defining Relationships: belongsTo
    */

    /**
    *
    * Eloquent Relationships Type: Has One  or Has Many
    *
    */

    /**
    *
    * Get the Brands associated with the Countries.
    * Defining Relationships: has Many
    */
    public function Brands()
    {
        return $this->hasMany(Brands::class,'Countries_id','id');
    }

    /**
    *
    * Get the Supplier associated with the Countries.
    * Defining Relationships: has Many
    */
    public function Supplier()
    {
        return $this->hasOne(Supplier::class,'Countries_id','id');
    }




}
