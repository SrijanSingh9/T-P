<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function fetchPosts(Request $request)
    {
        $posts = Post::orderBy('updated_at', 'asc')->paginate(10);

        if ($request->ajax()) {
            return view('posts', compact('posts'))->render();
        }

        return view('home', compact('posts'));
    }
}
