<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpComments extends Model
{
    /**
     * table name setting
     *
     * @var string
     */
    protected $table = 'wp_comments';

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
    protected $primaryKey = 'comment_ID';
}
