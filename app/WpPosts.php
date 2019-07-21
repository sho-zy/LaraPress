<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpPosts extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'wp_posts';

    /**
     * 複数代入しない属性
     *
     * @var array
     */
    protected $guarded = [];
}
