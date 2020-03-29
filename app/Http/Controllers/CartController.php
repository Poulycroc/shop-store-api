<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id)
    {

        $data = [
            'pageName' => 'Votre panier',
            'shopName' => $id,
            'shopLogo' => 'https://www.stickpng.com/assets/images/58406746657b0e0e08612e45.png',
            'products' => [
                [
                    'name'        => 'TUYAU JARDINAGE 25MM INTERIEUR',
                    'price'       =>  12.99,
                    'image1'       => 'https://www.sterennco.com/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/S/T/STE_67825__.jpg',
                    'description' => 'Tuyau multi-usages pour amenées d\'eau et arrosage domestique et industriel.',
                    'quantity'    =>  1,
                    'ref'         => '001-227390'
                ],
                [
                    'name'        => 'vidaXL Hôtel à insectes XXL 50 x 15 x 100 cm',
                    'price'       =>  86.99,
                    'image1'       => 'https://vdxl.im/8718475906919_a_en_r458.jpg',
                    'description' => 'Ce grand hôtel à insectes, construit en bois massif résistant aux intempéries, est conçu pour offrir un abri ou un refuge à de nombreux types d\'insectes. Le logement a une couleur naturelle du bois, et il peut être utilisé comme un lieu d\'hibernation en hiver et une station ombragée en été pour ces belles créatures.<br>Cette grande maison à insectes se compose de plusieurs sections différentes pour une large gamme et une diversité d\'insectes, y compris une fente au centre pour les papillons. Des pommes de pin naturelles, des tiges de bambou creuses et des copeaux de bois sont utilisés pour recréer un véritable habitat naturel et attirer différentes espèces.<br>La livraison comprend 1 grand hôtel à insectes.',
                    'quantity'    =>  2,
                    'ref'         => '8718475906919'
                ],
                [
                    'name'        => 'Carabine « Winchester» en laiton Arme décorative',
                    'price'       =>  199.00,
                    'image1'       => 'https://i.mmo.cm/is/image/mmoimg/an-product-max/carabine-%C2%AB-winchester%C2%BB-en-laiton-arme-decorative--an-102850-1.jpg',
                    'description' => 'Toutes nos armes factices disposent d\'éléments pratiques et mobiles, comme par exemple la gâchette et le porte chargeur (si présents sur l\'arme). Elles sont toutefois inaptes au tir et sont donc en vente libre.
Dans le respect de la tradition des armuriers anciens et des fabricants d\'armes, ces reproductions originales très détaillées sont le résultat d\'un travail manuel minutieux à l\'aide de pièces uniques bien conservées dans des musées consacrés aux armes, de journaux d\'époques et de modèles. Les éléments en bois se composent par ailleurs de bois naturel véritable et les éléments en métal sont fabriqués dans un alliage résistant de zinc et d\'aluminium. Une imitation d\'ivoire conçue spécialement pour les cannes et ornements en ivoire.
Le Winchester mesure 100 cm de longueur.',
                    'quantity'      =>  1,
                    'ref'           => '102850'
                ],
            ]
        ];
        return view('pages/cart', $data);
    }
}
