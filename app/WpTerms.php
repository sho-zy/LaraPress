<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpTerms extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'wp_terms';

    /**
     * 複数代入しない属性
     *
     * @var array
     */
    protected $guarded = [];
}
