<?php

namespace App\Http\Controllers;

use App\Models\Shop;

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
        'pageName' => 'Coronashop19.be',
        'shopName' => '*',
        'allShops' => Shop::all()
      ];
      return view('index', $data);
    }
}
