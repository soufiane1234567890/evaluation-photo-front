<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $postslast =Post::with(['comments' => function ($query) {
        }])->limit(4)->get();
      //dd(json_encode($postslast));  
        // DB::table('posts')
        //     ->orderBy('created_at', 'desc')
        //     ->take(4)
        //     ->get();

        $postspopulaires = Post::with(['comments' => function ($query) {
        }])->where('view_count', '>=', 1)->limit(4)->get();
        // DB::table('posts')
        //     ->where('view_count', '>=', 1)
        //     ->take(4)
        //     ->get();
        $categories = Categorie::all()->take(10);
        return view('welcome', compact(['postslast', 'postspopulaires', 'categories']));
    }


}
