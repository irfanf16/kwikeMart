<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nutrition;
use Illuminate\Http\Request;

class NutritionController extends Controller
{
    /** Display a listing of all deleted resource */
    public function deleted(){
        $nutritions = Nutrition::onlyTrashed()->get();
        return view('admin.pages.nutritions.deleted')->with('nutritions',$nutritions);
    }

    /** Restore deleted resource */
    public function restore($id){
        $nutrition = Nutrition::withTrashed()->find($id);
        if($nutrition->restore()){
            return redirect()->back()->with('info','New Nutrition Added');
        }
        else{
            return redirect()->back()->with('danger','Something went wrong');
        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nutritions = Nutrition::all();
        return view('admin.pages.nutritions.index')->with('nutritions',$nutritions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.nutritions.create');
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
        $data = $request->except(['_token']);
        $product_nutrition = Nutrition::create($data);
        if($product_nutrition){
            return redirect()->back()->with('info','New Nutrition Added');
        }
        else{
            return redirect()->back()->with('danger','Something went wrong');
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
        $nutrition = Nutrition::find($id);
        return view('admin.pages.nutritions.edit')->with('nutrition',$nutrition); 
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
        // dd($request->all());
        $data = $request->except(['_token']);
        $nutrition = Nutrition::find($id);
        $nutrition->update($data);
        if($nutrition){
            return redirect()->back()->with('info','New Nutrition Updated');
        }
        else{
            return redirect()->back()->with('danger','Something went wrong');
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
        $nutrition = Nutrition::find($id);
        if($nutrition->delete()){
            return redirect()->back()->with('info','Nutrition Deleted');
        }
    }
    
    /** Permanently Delete the Resource */
    public function hardDelete($id)
    {
        $nutrition = Nutrition::withTrashed()->find($id);
        if($nutrition->forceDelete()){
            return redirect()->back()->with('info','Nutrition Deleted');
        }
    }
}
