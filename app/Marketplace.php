<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model {

    protected $table    = 'marketplaces';

    protected $hidden   = ['company_id'];

    protected $fillable = [
        'marketplaceName'
    ];




    public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\MarketplaceRelations', 'product_marketplace_id', 'id', 'company_id');
    }

    public function product_relation()
    {
        return $this->hasMany('App\MarketplaceRelations', 'product_marketplace_id', 'id');
    }

}