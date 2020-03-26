<?php

namespace App\Http\Controllers;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
      $data = [
        'pageName' => 'Account'
      ];
        return view('pages/account', $data);
    }
}
