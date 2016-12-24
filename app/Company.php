<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'company_name','user_id'
    ];

    public function profile()
    {

        return $this->hasOne('App\CompanyDescription');

    }
    public $rules = [

        'company_name' => 'required|max:255',
        'company_phone' => 'required|regex:/^[^a-zA-Z]{5,}$/|max:255',
        'company_zipCode' => 'required|numeric',
        'company_country' => 'required|numeric',
        'company_state' => 'required|max:255',
        'company_email' => 'required|email|max:255',
        'company_address'=>'required|max:255',
        'company_address_extra'=>'required|max:255',

    ];




    public function vendors()
    {

        return $this->hasMany('App\Vendor');

    }

    public function marketplaces()
    {

        return $this->hasOne('App\Marketplace');

    }


}
