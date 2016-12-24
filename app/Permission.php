<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public $table = 'user_permissions';
    public function getAttributes(){
        return array_keys($this->attributes);
    }
    public $fillable = ['id','permission_id','permission_url','parent','sort_order'];
}
