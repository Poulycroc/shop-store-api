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
        'pageName' => 'Liste des magasins',
        'shopName' => '*',
        'allShops' => Shop::all()
      ];
      return view('index', $data);
    }
}
