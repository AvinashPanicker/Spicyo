<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes=Dish::all();
    return view('blog',compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dishes=new Dish();
        $dishes->name=request('name');
        $dishes->date=request('date');
        $dishes->src=request('src');
        $dishes->desc=request('desc');

        $request->validate([
            'name'=>'required|unique:dishes|min:2|max:15',
            'date'=>'required',
            'src'=>'required',
            'desc'=>'required|unique:dishes'
        ]);
        $dishes->save();
        return redirect('/blog/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dish=Dish::find($id);
        return view ('blogshow',compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dish=Dish::find($id);
        return view('blogedit',compact('dish'));
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
        $dish=Dish::find($id);
        $dish->name=request('name');
        $dish->date=request('date');
        $dish->src=request('src');
        $dish->desc=request('desc');
        $request->validate([
            'name'=>'required|unique:dishes|min:2|max:15',
            'date'=>'required',
            'src'=>'required',
            'desc'=>'required|unique:dishes'
        ]);
        $dish->save();
        return redirect('/blog/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish=Dish::find($id);
        $dish->delete();
        return redirect('/blog');
    }
}
