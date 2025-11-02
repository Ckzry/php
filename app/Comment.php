<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Comment extends Model
{
    //
	protected $fillable=[
	'content','notice_id','user_id'
	];
	public function notice(){
	return $this->belongsTo('App\Notice');
	}

	public function userName(){
	return User::find($this->user_id)->name;
	}
}
