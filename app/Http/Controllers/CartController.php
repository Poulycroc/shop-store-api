<?php

namespace App\Http\Controllers;

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
            'products' => [
                [
                    'name'        => 'CaraPils Can. 33Cl',
                    'price'       => '12,99 €',
                    'image'       => 'https://www.mangebelge.com/10961-large_default/cara-pils-44-33cl.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.',
                    'stock'       => true,
                    'ref'         => 'PRD1111'
                ],
                [
                    'name'        => 'Name2',
                    'price'       => '42,99 €',
                    'image'       => 'https://www.mangebelge.com/10961-large_default/cara-pils-44-33cl.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.',
                    'stock'       => true,
                    'ref'         => 'PRD2222'
                ],
                [
                    'name'        => 'Name3',
                    'price'       => '2,45 €',
                    'image'       => 'https://www.mangebelge.com/10961-large_default/cara-pils-44-33cl.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.<br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A delectus dignissimos dolores et facere illum, minus natus nesciunt omnis placeat praesentium quidem vel vitae. Harum iure molestiae officiis praesentium veritatis.',
                    'stock'       => true,
                    'ref'         => 'PRD3333'
                ],
            ]
        ];
        if(!is_null($id)) {
            return view('pages/shops', $data);
        }
    }
}
