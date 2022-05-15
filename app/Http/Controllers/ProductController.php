<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();
        return view('pages.product')->with('products', $products);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'src' => 'required',
            'active' => 'required',
        ]);

        $prod = new Product;
        $prod->name =  $request->input('name');
        $prod->price =  $request->input('price');
        $prod->description = $request->input('desc');

        $prod->is_active = $request->input('active');
        //dd($request->all());

        if($request->file('src')){
            $file = $request->file('src');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/images'),$filename);
            $prod->src = $filename;
        }else{
            //throw error because we can't keep a product without image
            dd($request->all());
        }
        $prod->save();
        return redirect('/product');
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
        $data=Product::find($id);
        $data->delete();
        return redirect('/product');
    }
}

