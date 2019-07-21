<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpLinks extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'wp_links';

    /**
     * 複数代入しない属性
     *
     * @var array
     */
    protected $guarded = [];
}
