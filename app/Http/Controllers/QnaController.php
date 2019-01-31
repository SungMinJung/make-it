<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QnaController extends Controller
{
    public function index(){
        $qnaList = [
            [
                'title'=>'MAKEIT 업무 휴무 공지 5월 1일 근로자의 날',
                'content'=>'5월 1일은 근로자의 날이므로 휴무입니다. 감사합니다',
                'category'=>'notice',
                'id'=>'board-1'
            ],
            [
                'title'=>'notice1',
                'content'=>'1',
                'category'=>'notice',
                'id'=>'board-2'
            ],
            [
                'title'=>'qna2',
                'content'=>'2',
                'category'=>'qna',
                'id'=>'board-3'
            ],
            [
                'title'=>'qna3',
                'content'=>'3',
                'category'=>'qna',
                'id'=>'board-4'
            ],
            [
                'title'=>'qna4',
                'content'=>'4',
                'category'=>'qna',
                'id'=>'board-5'
            ],
        ];
        return view('qna.index',compact('qnaList'));
    }
}
