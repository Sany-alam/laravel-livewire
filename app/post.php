<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
	protected $fillable = [
    	'user_id','text','image'
    ];
    
	public function comments()
    {
    	return $this->hasMany("App\comment","post_id");
    }

    public function creator()
    {
    	return $this->belongsTo("App\user","user_id");
    }
}
