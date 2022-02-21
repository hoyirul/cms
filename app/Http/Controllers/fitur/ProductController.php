<?php

namespace App\Http\Controllers\fitur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $detail = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequatur eveniet reprehenderit fuga, repellat sequi ut expedita, delectus ducimus ullam aut commodi ipsam assumenda fugiat exercitationem veniam rem quibusdam quae? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur cum laudantium, necessitatibus velit laboriosam veniam incidunt architecto mollitia esse aliquam obcaecati voluptas, delectus doloribus repellat quibusdam, pariatur nisi corrupti voluptatem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt culpa, temporibus quis quam consectetur architecto, beatae, reprehenderit officia perferendis velit necessitatibus quaerat? Itaque architecto tempora eius nobis cupiditate. Ducimus, earum.';

        $data = [
            [
                'name' => 'outdoor',
                'img' => 'https://cdn.shopify.com/s/files/1/0070/7032/files/trending-products_c8d0d15c-9afc-47e3-9ba2-f7bad0505b9b.png?format=jpg&quality=90&v=1614559651',
                'detail' => $detail
            ], 
            [
                'name' => 'unilever',
                'img' => 'https://sgp1.digitaloceanspaces.com/tz-mag-ph/wp-content/uploads/2021/07/121207070202/10-Best-Beauty-Products-for-Glowing-Skin-in-2021.png',
                'detail' => $detail
            ],
            [
                'name' => 'alat-pembersih',
                'img' => 'https://i.dailymail.co.uk/1s/2021/02/03/19/38846596-9211339-image-a-5_1612380357726.jpg',
                'detail' => $detail
            ],
            [
                'name' => 'elektronik',
                'img' => 'https://wpguynews.com/wp-content/uploads/2020/12/online-shopping-products.png',
                'detail' => $detail
            ]
        ];  

        return view('products.index', compact('data'));
    }

    public function detail($id){
        $detail = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequatur eveniet reprehenderit fuga, repellat sequi ut expedita, delectus ducimus ullam aut commodi ipsam assumenda fugiat exercitationem veniam rem quibusdam quae? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur cum laudantium, necessitatibus velit laboriosam veniam incidunt architecto mollitia esse aliquam obcaecati voluptas, delectus doloribus repellat quibusdam, pariatur nisi corrupti voluptatem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt culpa, temporibus quis quam consectetur architecto, beatae, reprehenderit officia perferendis velit necessitatibus quaerat? Itaque architecto tempora eius nobis cupiditate. Ducimus, earum.';

        $products = [
            [
                'name' => 'outdoor',
                'img' => 'https://cdn.shopify.com/s/files/1/0070/7032/files/trending-products_c8d0d15c-9afc-47e3-9ba2-f7bad0505b9b.png?format=jpg&quality=90&v=1614559651',
                'detail' => $detail
            ], 
            [
                'name' => 'unilever',
                'img' => 'https://sgp1.digitaloceanspaces.com/tz-mag-ph/wp-content/uploads/2021/07/121207070202/10-Best-Beauty-Products-for-Glowing-Skin-in-2021.png',
                'detail' => $detail
            ],
            [
                'name' => 'alat-pembersih',
                'img' => 'https://i.dailymail.co.uk/1s/2021/02/03/19/38846596-9211339-image-a-5_1612380357726.jpg',
                'detail' => $detail
            ],
            [
                'name' => 'elektronik',
                'img' => 'https://wpguynews.com/wp-content/uploads/2020/12/online-shopping-products.png',
                'detail' => $detail
            ]
        ];

        // dd($products[0]['name']);

        $data = [];
        foreach($products as $row){
            if($row['name'] == $id){
                $data = [
                    [
                        'name' => $row['name'],
                        'img' => $row['img'],
                        'detail' => $row['detail']
                    ]
                ];
            }
        }

        return view('products.detail', compact('data'));
    }
}
