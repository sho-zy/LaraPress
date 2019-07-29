<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpTermRelationships extends Model
{
    /**
     * table name setting
     *
     * @var string
     */
    protected $table = 'wp_term_relationships';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * not use timestamps
     */
    public $timestamps = false;

    /**
     * primary key setting
     */
    protected $primaryKey = 'object_id';
}
