<?php

namespace App\Http\Controllers;

/*use App\Models\Product;*/
use App\Models\Shop;

class ShopsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id)
    {
        if(!is_null(Shop::find($id))) {

            $data = [
                'shop_id' => $id,
                'shopName' => Shop::find($id)->name,
                'shopLogo' => Shop::find($id)->logo,
                'products' => Shop::find($id)->products()->get()
            ];

            return view('pages/shops', $data);

        } else {

            return redirect('/');

        }

    }
}
