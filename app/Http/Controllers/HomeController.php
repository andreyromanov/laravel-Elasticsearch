<?php

namespace App\Http\Controllers;

use App\Article;
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

    public function articles()
    {
        $articles = Article::latest()->get();

        return view('welcome', ['articles' => $articles]);
    }

    public function Showarray()
    {
        $objects = [];
        for ($i=0; $i<2; $i++) {
            // i'll just makeup some values for a,b,c,d here since i don't know
            // how you are assigning them
            $objects[] = (object) [
                "title" => $i,
                "body" => $i * 2,
                "slug" => $i * 5,
                "status" =>0
            ];
        }
        //print_r($objects);

        return json_encode($objects);
    }
}
