<?php

namespace App\Http\Controllers;

use App\new_blog;
use Illuminate\Http\Request;

class NewBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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


        $blog = new new_blog();
        $blog->tile = $request->title;
        $blog->Shortdescription = $request->Shortdescription;
        $blog->Description = $request->Description;
        if ($request->hasFile('image')){
            $this->validate($request, [
                'image' => 'file|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
            $file = $request->image;
            $extenion = $file->getClientOriginalExtension();
            $filename = time() ."." . $extenion;
//            $filename->store('uploads','public');
            $file->move('uploads/', $filename);
            $blog->image = $filename;
        }

        $blog->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\new_blog  $new_blog
     * @return \Illuminate\Http\Response
     */
    public function show(new_blog $new_blog)
    {
        $blogs = $new_blog->all();
        return view('welcome',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\new_blog  $new_blog
     * @return \Illuminate\Http\Response
     */
    public function edit(new_blog $new_blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\new_blog  $new_blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, new_blog $new_blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\new_blog  $new_blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(new_blog $new_blog)
    {
        //
    }

    /**
     * Full Blog the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\new_blog  $new_blog
     * @return \Illuminate\Http\Response
     */
    public function blog(Request $request, new_blog $new_blog, $id)
    {
        $blog = new_blog::find($id);
//        dd($blog);
        return view('blog',compact('blog'));
    }
}
