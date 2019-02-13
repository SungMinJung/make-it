<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    
    public function index(){
        
        // $portfolio = collect($portfolio)->all();
        $portfolio = [
            [
                'id'=>1,
                'link'=>'//naver.com',
                'title'=>'에어엔비',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'app'
            ],
            [
                'id'=>2,
                'link'=>'//naver.com',
                'title'=>'성미니',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'id'=>3,
                'link'=>'//naver.com',
                'title'=>'현규',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'app'
            ],
            [
                'id'=>4,
                'link'=>'//naver.com',
                'title'=>'동욱이',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'id'=>5,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>6,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'id'=>7,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>8,
                'link'=>'//naver.com',
                'title'=>'재미니재미니재미니재미니재미니재미니',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>9,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>10,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>11,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
        
        ];
        return view('portfolio.index',compact('portfolio'));
    }

    public function index2($seq){
        $portfolio = [
            [
                'id'=>1,
                'link'=>'//naver.com',
                'title'=>'에어엔비',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'app'
            ],
            [
                'id'=>2,
                'link'=>'//naver.com',
                'title'=>'성미니',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'id'=>3,
                'link'=>'//naver.com',
                'title'=>'현규',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'app'
            ],
            [
                'id'=>4,
                'link'=>'//naver.com',
                'title'=>'동욱이',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'id'=>5,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>6,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'web'
            ],
            [
                'id'=>7,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>8,
                'link'=>'//naver.com',
                'title'=>'재미니재미니재미니재미니재미니재미니',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>9,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>10,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
            [
                'id'=>11,
                'link'=>'//naver.com',
                'title'=>'재미니2',
                'main_image'=>'//placehold.it/224x224',
                'category'=>'response'
            ],
        
        ];
        foreach($portfolio as $item){
            if($item['title'] == $seq)
                {
                    return view('portfolio.port',compact('item'));
                }
        }
        
    }
}
