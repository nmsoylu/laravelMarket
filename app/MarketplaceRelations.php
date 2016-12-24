<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketplaceRelations extends Model {

	protected $table    = 'product_marketplace_relations';

	protected $fillable = [
	    'product_id',
        'product_marketplace_id'
    ];
}