<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'Currency';

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
        'Country',
        'Currency',
        'Code',
        'Minor_Unit',
        'Symbol',

    ];

    /**
    *
    * Eloquent Relationships
    * Defining Relationships: belongsTo
    *
    */


    /**
    *
    * Eloquent Relationships
    * Defining Relationships: Has One Or has Many
    *
    */

    /**
    *
    * The Wirting All Function
    *
    */
}
