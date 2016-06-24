<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_name', 'store_url', 'store_logo','store_terms','store_return_policy','sales_iD','sales_tax'
        ,'voucher_title'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
