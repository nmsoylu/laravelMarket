<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroupScope extends Model {

	protected $table = 'user_group_scopes';
	public $timestamps = false;

	public function getPermission()
	{
		return $this->hasOne('App\UserPermission', 'id');
	}

}