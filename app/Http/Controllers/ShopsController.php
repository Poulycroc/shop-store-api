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
                    'name'        => 'Name1',
                    'price'       => 'price1',
                    'image'       => 'https://www.mangebelge.com/10961-large_default/cara-pils-44-33cl.jpg',
                    'description' => 'CARA pils en canette de 33cl est une bière blonde type pils',
                    'stock'       => true,
                    'ref'         => 'PRD1111'
                ],
                [
                    'name'        => 'Name2',
                    'price'       => 'price2',
                    'image'       => 'https://www.mangebelge.com/10961-large_default/cara-pils-44-33cl.jpg',
                    'description' => 'CARA pils en canette de 33cl est une bière blonde type pils',
                    'stock'       => true,
                    'ref'         => 'PRD2222'
                ],
                [
                    'name'        => 'Name3',
                    'price'       => 'price3',
                    'image'       => 'https://www.mangebelge.com/10961-large_default/cara-pils-44-33cl.jpg',
                    'description' => 'CARA pils en canette de 33cl est une bière blonde type pils',
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
