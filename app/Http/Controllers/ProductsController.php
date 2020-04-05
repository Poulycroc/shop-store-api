<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id, $product_id)
    {
        if(!is_null(Product::find($product_id))) {
            $data = [
                'shop_id'  => $id,
                'shopLogo' => 'https://www.stickpng.com/assets/images/58406746657b0e0e08612e45.png',
                'product'  => Product::where('id', $product_id)->first()
            ];
            return view('pages/product', $data);
        } else {
            return redirect('/'.$id);
        }
    }

    public function store(Request $request)
    {
        //Populate model
        $product = new Product($request->except(['image']));

        $product->save();

        //Store Image
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $product->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect("/products/{$product->id}")->with('success', 'New Gift Added !');
    }
}
