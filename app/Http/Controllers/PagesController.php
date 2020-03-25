<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function home()
    {
      $data = [
        'pageName' => 'Coronashop19.be'
      ];
      return view('index', $data);
    }
}
