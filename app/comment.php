<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
    	'user_id','post_id','text'
    ];

    public function creator()
    {
    	return $this->belongsTo("App\user","user_id");
    }
    public function post()
    {
    	return $this->belongsTo("App\user","post_id");
    }
}
