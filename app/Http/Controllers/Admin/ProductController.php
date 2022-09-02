<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('admin.pages.inventoryproducts.products')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = Category::where('parent_id','=',null)->where('active','1')->get();
        return view('admin.pages.inventoryproducts.addnewproducts')->with('parent_categories',$parent_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token','category_id']);
        $data['slug'] = Str::slug($request->title);

        
        $product = Product::create($data);
        
        $image = $product->id."image-".time().'.'.$request->image->extension();  
        $request->image->move(storage_path('app/public/images/products'),$image);
        $product->image = 'products/'.$image;
        
        if($product->save()){
            $category_id = $request->category_id;
            $product_id = $product->id;
            CategoryProduct::create([
                'product_id'=> $product_id,
                'category_id'=> $category_id,
                ]);
            return redirect()->back()->with('info','New Product Added');
        }
        else{
            return redirect()->back()->with('danger','Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = Product::find($request->product);
        return view('admin.pages.inventoryproducts.edit_products')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        unlink($product->image);
        if($product->delete()){
            return redirect()->back()->with('info','product deleted');
        }
        else{
            return redirect()->back()->with('danger','something went wrong');
        }
    }
}
