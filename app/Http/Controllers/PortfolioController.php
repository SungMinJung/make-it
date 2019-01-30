<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
        
    public function index(){
        $portfolio = [
            [
                'link'=>'//naver.com',
                'title'=>'에어엔비',
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
            [
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'재미니재미니재미니재미니재미니재미니',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
        
        ];

        return view('portfolio.index',compact('portfolio'));
    }
}
