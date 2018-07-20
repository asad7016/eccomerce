<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

use Illuminate\Http\Response;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $products =Product::all();
      return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 $categories=Category::pluck('name','id');
          return view('admin.product.create',compact('categories',$categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        validation
        $this->validate($request,[
        'name'=>'required',
        'price'=>'required',
        'description'=>'required',   
        'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
//        image upload
         if($request->hasFile('image')) {
            $imageName=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($imageName,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path =$request->file('image')->storeAs('public/images',$fileNameToStore);
            }
        
       $product = new Product;
       $product->name=$request->name;
       $product->description=$request->description;
       $product->size=$request->size;
       $product->price=$request->price;
       $product->image=$fileNameToStore;
       $product->category_id=$request->category_id;
       $product->save();
        return redirect('/admin/product')->with('success','Product Created');
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
        //
    }
}
