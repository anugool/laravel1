<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class SessionController extends Controller
{
    //
    public function create(){

      return view('session.create');

    }

    //
    public function store(){


      if(! auth()->attempt(request(['name', 'password'])))
      {

          return back()
            ->withErrors([ 'message' => 'Pleas check your username and password']);

          };

          $customers = Customers::showCustomer();

          $customers = Customers::showCustomer();
          $num = 0;

          return view('casino.index', compact('customers', 'num'));

          return redirect()->home();

        }

    //
    public function destroy(){

      auth()->logout();

      return view('session.create');

    }
}
