<?php

namespace App\Http\Controllers;
use App\Post;
use App\general;
use DB;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('published', true)->paginate(20);
        $image = general::paginate(6);

        return view('welcome',['posts'=>$posts,'image'=>$image]);




    }

    public function blog(){
        // $posts = Post::where('published', true)->;
        $posts = DB::table('posts')
        ->join('users','user_id', '=' , 'users.id')
        ->select('posts.*','users.name')->where('published', true)->paginate(3);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->where('published', true)->take(5)->get();



        return view('blog',['posts'=>$posts,'link'=>$archives]);
    }

}
