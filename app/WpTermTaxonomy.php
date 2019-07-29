<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpTermTaxonomy extends Model
{
    /**
     * table name setting
     *
     * @var string
     */
    protected $table = 'wp_term_taxonomy';

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
    protected $primaryKey = 'term_taxonomy_id';
}
