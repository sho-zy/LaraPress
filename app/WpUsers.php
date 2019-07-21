<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WpUsers extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'wp_users';

    /**
     * 複数代入しない属性
     *
     * @var array
     */
    protected $guarded = [];
}
