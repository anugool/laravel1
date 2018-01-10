<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class CustomerController extends Controller
{
    //
    public function __construct(){


      $this->middleware('auth')->except(['index']);

    }



    public function index(){


      return view('session.create');

    }


    public function create(){
      return view('casino.create');
    }

    public function store(){
    //  dd(request()->all());

      $this->validate(request(),[

        'customer_name' => 'required',
        'dateregis' => 'required',
        'casino_name' => 'required',
        'promotion' => 'required',
        'optradio' => 'required',

      ]);

    //dd(request()->all());

      Customers::create([
        'customer_name' => request('customer_name'),
        'dateregis' => request('dateregis'),
        'casino_name' => request('casino_name'),
        'promotion' => request('promotion'),
        'optradio' => request('optradio')

      ]);

      $customers = Customers::showCustomer();


      return back()->with('success' , 'Insert customer successfully');


    }


}
