<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpTermTaxonomy extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'wp_term_taxonomy';

    /**
     * 複数代入しない属性
     *
     * @var array
     */
    protected $guarded = [];
}
