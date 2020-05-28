<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\InfoUser;
use App\Page;
use App\Photo;
use App\Tag;

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
        // $user = User::find(1);
        // $info = InfoUser::all();
        // $category = Category::find(1);
        // $page = Page::find(1);
        // $photo = Photo::find(1);
        // $tag = Tag::find(1);
        // dd($user->categories());
        // dd($user->category->name);
        // dd($category);

        return view('home');
    }
}
