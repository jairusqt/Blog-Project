<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
    
        return view('blogs.index', 
        [
            'blogs' => $blogs,
        ]);
    }
    
    public function show($id){

        $blog = Blog::findOrFail($id);

        return view('blogs.show', ['blog' => $blog]);


    }

    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request) {
        $blogs = new Blog();

        $blogs->title = $request->input('title');
        $blogs->content = $request->input('content');
        $blogs->author = $request->input('author');
        $blogs->headlines = $request->input('headlines');

        $blogs->save();
        
        return redirect('/');
    }

    public function destroy($id){
        
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/blogs');
        
    }
}
