<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //fillable
    protected $fillable=[
    	'user_id', 'content', 'live', 'post_on'
    	];

    //convert live to boolean
    public function setLiveAttribute($live)
    {
    	$this->attributes['live']=(boolean)($live);

    }
}
