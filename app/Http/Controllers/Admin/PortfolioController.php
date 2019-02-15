<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Portfolio;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portList = Portfolio::all();
        
        return view("admin.portfolio.index",compact('portList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.portfolio.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $port = new Portfolio([
            'category' => $request->get('category'),
            'title' => $request->get('title'),
            'main_title' => $request->get('main_title'),
            'dep_date' => $request->get('dep_date'),
            'link' => $request->get('link'),
            'main_imgurl' => $request->get('summernote')
        ]);
        $port->save();
        
        return redirect('admin/portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $port = Portfolio::find($id);

        return view("admin.portfolio.show", compact('port'));
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
        $port = Portfolio::find($id);

        return view("admin.portfolio.edit", compact('port'));
        
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
        


        $port = Portfolio::find($id);
        $port->category = $request->get('category');
        $port->title = $request->get('title');
        $port->update();

        return redirect('admin/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        $id)
    {
        //
        $port = Portfolio::find($id);
        
        $port->delete();
        return redirect('admin/portfolio');
    }
}
