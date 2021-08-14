<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resources\views\blogDisplay;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;
use DB;

class BlogController extends Controller
{
    public function urlFetch($id){
        $blogs = DB::select('SELECT * from posts');
        $comments = DB::select('SELECT * from comments');
        return view('blogDisplay', ['blogs' => $blogs,'blogid' => $id ,'comments'=> $comments]);

    }
}
