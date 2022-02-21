<?php

namespace App\Http\Controllers\fitur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $detail = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequatur eveniet reprehenderit fuga, repellat sequi ut expedita, delectus ducimus ullam aut commodi ipsam assumenda fugiat exercitationem veniam rem quibusdam quae? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur cum laudantium, necessitatibus velit laboriosam veniam incidunt architecto mollitia esse aliquam obcaecati voluptas, delectus doloribus repellat quibusdam, pariatur nisi corrupti voluptatem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt culpa, temporibus quis quam consectetur architecto, beatae, reprehenderit officia perferendis velit necessitatibus quaerat? Itaque architecto tempora eius nobis cupiditate. Ducimus, earum.';

        $data = [
            [
                'slug' => 'breaking-news-covid-19',
                'name' => 'Breaking NewsCovid 19',
                'img' => 'https://img.freepik.com/free-vector/breaking-news-concept_23-2148500601.jpg?size=626&ext=jpg&ga=GA1.2.925963199.1639008000',
                'detail' => $detail
            ], 
            [
                'slug' => 'jumlah-pasien-bertambah',
                'name' => 'Jumlah Pasien Bertambah',
                'img' => 'https://images.hindustantimes.com/img/2022/01/07/550x309/india_breaking_news_live_updates_january_7_2022_1641517604725_1641517604847.jpeg',
                'detail' => $detail
            ],
            [
                'slug' => 'kata-kapolda-papua-bertembakan',
                'name' => 'Kata Kapolda Papua Bertembakan',
                'img' => 'http://c.files.bbci.co.uk/9386/production/_117866773_p08wdkb1.jpg',
                'detail' => $detail
            ],
            [
                'slug' => 'btc-sedang-tidak-baik-baik-saja',
                'name' => 'BTC Sedang Tidak Baik-Baik Saja',
                'img' => 'https://prod.static9.net.au/_/media/2020/01/20/10/13/brisbane-9-news-meet-the-team.jpg',
                'detail' => $detail
            ]
        ];  

        return view('news.index', compact('data'));
    }

    public function detail($slug){
        $detail = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum consequatur eveniet reprehenderit fuga, repellat sequi ut expedita, delectus ducimus ullam aut commodi ipsam assumenda fugiat exercitationem veniam rem quibusdam quae? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur cum laudantium, necessitatibus velit laboriosam veniam incidunt architecto mollitia esse aliquam obcaecati voluptas, delectus doloribus repellat quibusdam, pariatur nisi corrupti voluptatem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt culpa, temporibus quis quam consectetur architecto, beatae, reprehenderit officia perferendis velit necessitatibus quaerat? Itaque architecto tempora eius nobis cupiditate. Ducimus, earum.';

        $news = [
            [
                'slug' => 'breaking-news-covid-19',
                'name' => 'Breaking NewsCovid 19',
                'img' => 'https://img.freepik.com/free-vector/breaking-news-concept_23-2148500601.jpg?size=626&ext=jpg&ga=GA1.2.925963199.1639008000',
                'detail' => $detail
            ], 
            [
                'slug' => 'jumlah-pasien-bertambah',
                'name' => 'Jumlah Pasien Bertambah',
                'img' => 'https://images.hindustantimes.com/img/2022/01/07/550x309/india_breaking_news_live_updates_january_7_2022_1641517604725_1641517604847.jpeg',
                'detail' => $detail
            ],
            [
                'slug' => 'kata-kapolda-papua-bertembakan',
                'name' => 'Kata Kapolda Papua Bertembakan',
                'img' => 'http://c.files.bbci.co.uk/9386/production/_117866773_p08wdkb1.jpg',
                'detail' => $detail
            ],
            [
                'slug' => 'btc-sedang-tidak-baik-baik-saja',
                'name' => 'BTC Sedang Tidak Baik-Baik Saja',
                'img' => 'https://prod.static9.net.au/_/media/2020/01/20/10/13/brisbane-9-news-meet-the-team.jpg',
                'detail' => $detail
            ]
        ];  

        // dd($products[0]['name']);

        $data = [];
        foreach($news as $row){
            if($row['slug'] == $slug){
                $data = [
                    [
                        'name' => $row['name'],
                        'img' => $row['img'],
                        'detail' => $row['detail']
                    ]
                ];
            }
        }

        return view('news.detail', compact('data'));
    }
}
