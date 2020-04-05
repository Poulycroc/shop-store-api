<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ShopsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id)
    {

        $data = [
            'shopName' => $id,
            'shopLogo' => 'https://www.stickpng.com/assets/images/58406746657b0e0e08612e45.png',
            'products' => Product::all()
        ];

        if(!is_null($id)) {
            return view('pages/shops', $data);
        }
    }
}
