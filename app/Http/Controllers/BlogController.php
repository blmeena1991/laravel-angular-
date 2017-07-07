<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index(Request $request){
       // $blogs = Blog::all();
        $blogs = DB::table('blogs')->paginate(15);

        return response()->json(['result' => $blogs]);
    }
}
