<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {
        $All = Product::all();
        $Kategori = ProductCategory::all();
        return view('backend.product.index', compact('All', 'Kategori'));
    }

    public function create()
    {
        $Kategori = ProductCategory::all();
        return view('backend.product.create',compact('Kategori'));
    }

    public function store(Request $request)
    {
        $New = Product::create($request->except('category','image','gallery'));

        if($request->hasfile('image')){
            $New->addMedia($request->image)->toMediaCollection('page');
        }


        $New->save();

        $New->getCategory()->attach($request->category);

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('product.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Edit = Product::where('id',$id)->first();
        $Kategori = ProductCategory::all();
        $Pivot = DB::table('product_product_category')->where(['product_id'=> $id])->get();

        return view('backend.product.edit', compact('Edit', 'Kategori', 'Pivot'));
    }

    public function update(Request $request, Product $Update)
    {

        //dd($request->all());
        $input = $request->except('category', '_token', '_method');

        $Update->fill($input)->save();

        if($request->hasfile('image')){
            $Update->addMedia($request->image)->toMediaCollection('page');
        }

        if($request->hasfile('gallery')) {
            foreach ($request->gallery as $item){
                $Update->addMedia($item)->toMediaCollection('gallery');
            }
        }

        $Update->getCategory()->sync($request->category);

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('product.index');
    }


    public function destroy($id)
    {
        //
    }

    public function getOrder(Request $request){
        foreach($request->get('page') as  $key => $rank ){
            Product::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update=Product::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }
}
