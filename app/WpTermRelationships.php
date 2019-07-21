<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpTermRelationships extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'wp_term_relationships';

    /**
     * 複数代入しない属性
     *
     * @var array
     */
    protected $guarded = [];
}
