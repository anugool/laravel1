<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //
    protected $fillable = [
    'customer_name',
    'dateregis',
    'casino_name',
    'promotion',
    'line_id',
    'optradio',
];

public static function showCustomer(){

  $customer = Customers::all();

  return $customer;

}

}
