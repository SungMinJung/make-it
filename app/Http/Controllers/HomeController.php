<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = [
            [
                'link'=>'//naver.com',
                'title'=>'재미니',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'app'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'성미니',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'현규',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'app'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'동욱이',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
        ];

        // b:foreach ($portfolio as $item) {
        //     {{ $item->name }}
        //     {{ $item['name'] }}
        // }
        return view('home',compact('portfolio'));
    }
}
