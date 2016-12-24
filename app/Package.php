<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permission;
class Package extends Model
{
    //
    public $timestamps = false;
    public $fillable = ['id','package_title','package_sub_title','package_description','package_price','renewal_type','active','recommend'];

    public function relations() {
        return $this->hasMany('App\PackagePermissionRelation','package_id');
    }
    public function permission() {
        return $this->belongsToMany('App\Permission', 'package_permission_relation', 'id', 'permission_id');
    }


}
