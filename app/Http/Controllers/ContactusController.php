<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;

class ContactusController extends Controller
{

    /**
     * contactus메인페이지
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * contactus의 데이터가 나타나는 곳
     */
    public function admin()
    {
        $contactuses = Contactus::all();

        return view('admin.contact.index', compact('contactuses'));
    }

    public function store(Request $request) 
    {
        $contactus = new Contactus([
            'contact_name' => $request->get('contact_name'),
            'contact_tel' => $request->get('contact_tel'),
            'contact_email' => $request->get('contact_email'),
            'contact_refsite' => $request->get('contact_refsite'),
            'contact_content' => $request->get('contact_content'),
        ]);
        $contactus->save();

        return redirect()->route('contact');
    }

    public function show($id) 
    {
        $contactus = Contactus::find($id);

        return view('admin.contact.show', compact('contactus'));
    }

    public function destroy($id) {
        $contactus = Contactus::find($id);
        $contactus->delete();

        return redirect()->route('contact.admin');
    }
}
