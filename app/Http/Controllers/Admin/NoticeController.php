<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notice;
use Illuminate\Support\Facades\DB;


class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::where('category', 'notice')->get();
        $qnas = Notice::where('category', 'qna')->get();
        // $notices=Notice::all();
        // $notices=DB::table('notices')->orderBy('id','desc')->paginate(10);
        return view('admin.question.index',compact('notices', 'qnas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if($type=='qna'){
        //     return view('admin.question.qna.create');
        // }
        // if($type=='notice')
        // {
        //     return view('admin.question.notice.create');

        // }

             return view('admin.question.notice.create');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,String $type)
    {

        if($type==='qna')
        {
            // $query = Notice::where('category', 'notice')->first();
            $query='qna';

        }else{
            // $query = Notice::where('category', 'qna')->first();
            $query='notice';

        }
        // $notice=Notice::where('category',$type==='notice'?'notice':'qna')->first();

        // $notice=Notice::where('category',$type)->first();

        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        $notice = new Notice([
            'subject' => $request->input('subject'),
            'content' => $request->input('content'),
            'category'=>$query,
            'cnt'=>0,
        ]);
        
        
        // $url = $this->uploadFile($request, 'main_image');
        // $document->main_image = $url;
        $notice->save();
        return redirect()->route('admin.notice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice=Notice::find($id);
        $notice->cnt++;
        $notice->save();
        return view('admin.question.notice.show',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice=Notice::where('id',$id)->delete();
        // $notice=Notice::find($id);
        // $notice->delete();
        return redirect()->route('admin.notice.index');
    }
}
