<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $temp = new \App\Posts();
        $temp = $temp->simplePaginate(15);
        return view('communities.index', ['data'=>$temp]);
    }
    public function create(Request $req)
    {
        $temp = new \App\Posts();
        $temp->link = $req->input('link');
        $temp->name = $req->input('name');
        $temp->about = $req->input('about');
        $temp->save();
        return redirect('/communities/'.$temp->id);
    }
    public function delete($id)
    {
        $temp = \App\Posts::find($id);
        $temp->delete();
        return redirect('/communities');
    }
    public function update(Request $req)
    {
        //not important yet
    }
    public function read($id)
    {
        $temp = \App\Posts::find($id);
        return view('communities.read', ['data'=>$temp]);
    }
}

