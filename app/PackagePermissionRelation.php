<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagePermissionRelation extends Model
{
    //
    public $table = 'package_permission_relations';
    public $timestamps  = false;
    public $fillable = ['package_id','permission_id'];
}
