<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
use Illuminate\Support\Facades\DB;



class QnaController extends Controller
{
    public function create()
    {

        return view('admin.question.qna.create');

    }
    public function common(){
        return view('admin.question.common');
    }
    

    // ************************************************************
    public function store(Request $request,String $type)
    {
        // dd($type);
    if($type==='notice')
    {
        // $query = Notice::where('category', 'qna')->first();
        // $query='notice';
        // DB::table('notices')->insert(
        //     ['category'=>'notice']
        // );
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);
        $notices = new Notice([
            'subject' => $request->get('subject'),
            'content' => $request->get('content'),
            'category'=>'notice',
            'cnt'=>0,
        ]);
        $notices->save();
        $query = Notice::orderBy('id', 'desc');
        $query = $query->where('category', 'notice')->paginate(10);
        $notices=$query;
     return redirect()->route('admin.notice.index',compact('notices'));
        
        
    }
    // qnaqnaqnaqnanqannnsdnfnasdfnasdnfnasdnfn
    else if($type==='qna')
    {
            // $query = Notice::where('category', 'notice')->first();
            // $query='qna';
            // DB::table('notices')->insert(
            //     ['category'=>'qna']
            // );
            $request->validate([
                'subject' => 'required',
                'content' => 'required',
                // 'category'=>'qna',
            ]);
            $notices2 = new Notice([
                'subject' => $request->input('subject'),
                'content' => $request->input('content'),
                // 'category'=>$query,
                // 'category'=>$request->'notice',
                'category'=>'qna',
                'cnt'=>0,
            ]);
            $notices2->save();
            $query = Notice::orderBy('id', 'desc');
            $query = $query->where('category', 'qna')->paginate(10);
            $notices2=$query;
    return redirect()->route('admin.notice.index',compact('notices2'));
            
        }
        // $notice=Notice::where('category',$type==='notice'?'notice':'qna')->first();

        // $notice=Notice::where('category',$type)->first();

        // $request->validate([
        //     'subject' => 'required',
        //     'content' => 'required',
        // ]);

        // $notice = new Notice([
        //     'subject' => $request->input('subject'),
        //     'content' => $request->input('content'),
        //     // 'category'=>$query,
        //     // 'category'=>$request->'notice',

        //     'cnt'=>0,
        // ]);
        
        
        // $url = $this->uploadFile($request, 'main_image');
        // $document->main_image = $url;
        return view('admin.question.index',compact('notices'));
        
    }


}
