<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model {

	protected $table = 'user_groups';
	public $timestamps = true;

	public function groupUsers()
	{
		return $this->hasMany('App\UserGroupRelation', 'group_id');
	}

	public function groupScopes()
	{
		return $this->hasMany('App\UserGroupScope', 'group_id');
	}

}