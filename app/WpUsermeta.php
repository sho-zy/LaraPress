<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpUsermeta extends Model
{
    /**
     * table name setting
     *
     * @var string
     */
    protected $table = 'wp_usermeta';

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
    protected $primaryKey = 'umeta_id';
}
