<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\LoginRequest;
use App\Customers;

class SessionController extends Controller
{
    //

    public function __construct(){

      $this->middleware('guest', ['except' => 'destroy']);

    }
    



    public function create(){

      return view('session.create');

    }

    //
    public function store(){


      if(! auth()->attempt(request(['username', 'password'])))
      {

          return back()
            ->withErrors([ 'message' => 'Pleas check your username and password']);

          };

          $customers = Customers::showCustomer();
          $num = 0;

          return redirect()->home();

          //return view('casino.index', compact('customers', 'num'));



        }

    //
    public function destroy(){

      auth()->logout();

      return view('session.create');

    }
}
