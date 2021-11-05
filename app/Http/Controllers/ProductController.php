<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB, Session, Validator, Str;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index')->with('product', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = Validator::make($request->all(),[
            'judul' => 'required|unique:products',
            'img' => 'required|mimes:jpg,jpeg,bmp,png',
            'content' => 'required',
        ]);
        if ($val->fails()) {
            Session::flash('err', 'Gagal memasukan data ke database, judul produk tidak boleh sama.');
            return redirect()->back();
        }else{
            $img = $request->img;
            $img_new = time().$img->getClientOriginalName();
            $img->move('product', $img_new);

            $data = Product::create([
                'judul' => strtolower($request->judul),
                'content' => $request->content,
                'img' => 'product/' . $img_new,
                'slug' => Str::slug($request->judul),
            ]);
            if ($data) {
                Session::flash('scs', 'Data berhasil dimasukan kedalam database, Terim kasih.');
                return redirect()->route('index.product');
            }
        }
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('admin.product.edit',compact('data'));
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
        $data = Product::find($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'content' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('err', 'Gagal update, silahkan periksa kembali');
            return redirect()->back();
        }else{
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('product', $img_new);
                $data->img = 'product/' . $img_new;
            }
                $data->judul = strtolower($request->judul);
                $data->content = $request->content;
                $data->slug = Str::slug($request->judul);
                $data->save();
                Session::flash('scs', 'Data berhasil update, Terima kasih.');
                return redirect()->route('index.product');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        if ($data) {
            Session::flash('scs', 'Data berhasil dihapus secara permanen, Terim kasih.');
            return redirect()->route('index.product');
        }
    }
}
