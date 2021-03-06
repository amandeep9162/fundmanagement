<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $fillable = ['name','title','type','description','video','images','phone','address','pin_code','account','amount','user_id'];

	public function event_type_rel()
	{
		return $this->belongsTo('App\Model\eventtype','type','id');
	} 

}
