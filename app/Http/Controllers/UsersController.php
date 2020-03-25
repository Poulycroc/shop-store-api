<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
      $data = [
        'users' => User::all()
      ];
      return view('pages/users/all', $data);
    }
}
