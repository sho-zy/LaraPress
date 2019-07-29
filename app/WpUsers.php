<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpUsers extends Model
{
    /**
     * table name setting
     *
     * @var string
     */
    protected $table = 'wp_users';

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
    protected $primaryKey = 'ID';
}
