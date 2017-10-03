<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class eventtype extends Model
{
     protected $fillable =['type'];

     public function type_rel(){
     	return $this->hasMany('App/Model/Event', 'type','id');
     }
}
