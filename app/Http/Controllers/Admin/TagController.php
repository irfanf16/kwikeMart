<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.pages.tags.index')->with('tags',$tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $tag = new Tag();
        $tag->name = $name;
        $tag->save();

        $icon = $tag->id."icon-".time().'.'.$request->icon->extension();  
        $request->icon->move(storage_path('app/public/images/tags'),$icon);
        $tag->icon = 'tags/'.$icon;

        if($tag->save()){
            return redirect()->back()->with('info',"tag added");
        }
        else{
            return redirect()->back()->with('danger',"Something went wrong");
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
        $tag = Tag::find($id);
        return view('admin.pages.tags.edit')->with('tag',$tag);
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
        $tag = Tag::find($id);
        $tag->name = $request->name;

        if(isset($request->icon)){
            if(file_exists($tag->icon)){
                unlink($tag->icon);
            }
            $icon = $tag->id."icon-".time().'.'.$request->icon->extension();  
            $request->icon->move(storage_path('app/public/images/tags'),$icon);
            $tag->icon = 'tags/'.$icon;
        }

        if($tag->save()){
            return redirect()->back()->with('info',"tag updated");
        }
        else{
            return redirect()->back()->with('danger',"something went wrong");
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
        $tag = Tag::find($id);

        if($tag->delete()){
            return redirect()->back()->with('info','tag deleted');
        }
        else{
            return redirect()->back()->with('danger','something went wrong');
        }
    }
}
