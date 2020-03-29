<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id, $ref)
    {
        $data = [
            'shopName' => $id,
            'shopLogo' => 'https://www.stickpng.com/assets/images/58406746657b0e0e08612e45.png',
            'product' =>
                [
                    'name'        => 'CaraPils Can. 33Cl',
                    'price'       => '12,99€',
                    'image1'       => 'https://www.mangebelge.com/10961-large_default/cara-pils-44-33cl.jpg',
                    'image2'       => 'https://t2.ldh.be/96GsfY9oqZfqQ_ewvGNCaVAx1zc=/0x161:4000x2161/940x470/5b571b4d5532692548451081.jpg',
                    'image3'       => 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Carapils.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.',
                    'stock'       => true,
                    'ref'         => $ref
                ]
        ];
            return view('pages/product', $data);
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
