<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session,DB, Hash;
use App\Product;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.home')->with('product', Product::all());
    }
    
    public function about()
    {
        return view('client.about')->with('product', Product::all());
    }
    
    public function product()
    {
        return view('client.product')->with('product', Product::all());
    }
    
    public function product_view($id)
    {
        $data = Product::where('slug',$id)->first();
        return view('client.product_view',compact('data'));
    }
    
    public function contact()
    {
        return view('client.contact');
    }
    
    public function contact_send(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'pesan' => $request->pesan,
            ];
        Mail::to('info@sundacoffeebeans.jp')->send(new \App\Mail\ContactMail($details));

        if (Mail::failures()) {
            // return response showing failed emails
        }
        Session::flash('sc_alert','Email terkirim balasan akan dikirim ke email anda, Terima Kasih');
        return redirect()->back();
    }
}
