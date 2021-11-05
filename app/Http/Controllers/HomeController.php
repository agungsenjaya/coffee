<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB, Session, Str, Validator, Hash;
use App\User;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('product', Product::all())->with('user',User::all());
    }
   
    public function account()
    {
        return view('admin.account');
    }
    
    public function account_update(Request $request, $id)
    {
        $data = User::find($id);
        $val = Validator::make($request->all(),[
            'password' => 'required|confirmed',
        ]);
        if ($val->fails()) {
            Session::flash('err', 'Gagal update, silahkan periksa kembali');
            return redirect()->back();
        }else{
            // $data = User::update($request->user,[
            //     'id' => $request->id,
            //     'password' => Hash::make($request->password),
            // ]);
            $data->password = Hash::make($request->password);
            $data->save();
            if ($data) {
                Session::flash('scs', 'Account berhasil diupdate, Terima kasih.');
                return redirect()->route('account');
            }
        }
    }
    
    public function website()
    {
        return view('admin.website');
    }
}
