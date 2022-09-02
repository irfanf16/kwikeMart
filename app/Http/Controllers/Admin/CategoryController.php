<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function change($id){
        $category = Category::find($id);
        
        if($category->active == 1){
            $category->active = 0;
        }
        else{
            $category->active = 1;
        }

        if($category->save()){
            return redirect()->back()->with('alert','info')->with('message','Category Status Changed');
        }
        else{
            return redirect()->back()->with('alert','danger')->with('message','Something Wrong');
        }

    }
    public function load_sub(Request $request){
        $parent_ids = Category::where('active','1')->where('parent_id','=',null)->pluck('id')->toarray();
        $categories = Category::where('active','1')->wherein('id',$parent_ids)->with('subCategories')->get();
        return view('admin.pages.categorymanagement.load_sub_category')->with('categories',$categories);
    }
    public function view_sub(Request $request){
        $parent_ids = Category::where('active','1')->where('parent_id','=',null)->pluck('id')->toarray();
        $categories = Category::where('active','1')->wherein('id',$parent_ids)->with('subCategories')->get();
        
        $sub_categories = Category::where('parent_id',$request->cate_id)->with('subCategories')->get();
        return view('admin.pages.categorymanagement.load_sub_category')->with('categories',$categories)->with('sub_categories',$sub_categories);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent_ids = Category::where('parent_id','=',null)->pluck('id')->toarray();
        $categories = Category::wherein('id',$parent_ids)->with('subCategories')->get();
        return view('admin.pages.categorymanagement.all_category')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.categorymanagement.add_category');
    }
    public function create_sub()
    {
        $all_categories = Category::where('parent_id','=',null)->where('active','1')->get();
        return view('admin.pages.categorymanagement.add_sub_category')->with('all_categories',$all_categories);
    }
    public function create_sub_sub()
    {
        $all_categories = Category::where('parent_id','=',null)->where('active','1')->get();
        return view('admin.pages.categorymanagement.add_sub_sub_category')->with('all_categories',$all_categories);
    }
    public function get_sub_category(Request $request){
        
        $id = $request->id;
        $category = Category::where('parent_id',$id)->get();
        return $category;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if(isset($request->parent_id)){
            $data['parent_id'] = $request->parent_id;
        }
        if(isset($request->image)){
            $image = "category-".time().'.'.$request->image->extension();  
            $request->image->move(storage_path('app/public/images/categories'),$image);
            $data['image'] = 'categories/'.$image;
        }
        if(isset($request->name)){
            $data['name'] = $request->name;
        }
        if(isset($request->color)){
            $data['background_color'] = $request->color;
        }
        if(isset($request->status)){
            $data['active'] = $request->status;
        }
        
        if(Category::create($data)){
            return redirect()->back()->with('alert','info')->with('message','Category Added');
        }
        else{
            return redirect()->back()->with('alert','danger')->with('message','Something Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $sub_categories = Category::where('parent_id',$category->id)->with('subCategories')->get();
        return view('admin.pages.categorymanagement.sub_category')->with('category',$category)->with('sub_categories',$sub_categories);
    }
    
    public function show_sub($category,$sub_category)
    {
        $category = Category::find($category);
        $sub_category = Category::find($sub_category);
        $sub_sub_categories = Category::where('parent_id',$sub_category->id)->with('subCategories')->get();
        return view('admin.pages.categorymanagement.sub_sub_category')->with('category',$category)->with('sub_category',$sub_category)->with('sub_sub_categories',$sub_sub_categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $category = Category::where('id',$category->id)->with('parent_category')->first();
        $all_categories = Category::all();
        return view('admin.pages.categorymanagement.edit_category')->with('category',$category)->with('all_categories',$all_categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if(isset($request->parent_id)){
            $data['parent_id'] = $request->parent_id;
        }
        if(isset($request->image)){
            $data['image'] = $request->image;
        }
        if(isset($request->name)){
            $data['name'] = $request->name;
        }
        if(isset($request->color)){
            $data['background_color'] = $request->color;
        }
        if(isset($request->status)){
            $data['active'] = $request->status;
        }
        
        if($category->update($data)){
            return redirect()->route('category.load_sub')->with('alert','info')->with('message','Category Updated');
        }
        else{
            return redirect()->route('category.load_sub')->with('alert','danger')->with('message','Something Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
