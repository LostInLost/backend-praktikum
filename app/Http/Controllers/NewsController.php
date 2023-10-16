<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    // public function index()
    // {
    //     return view('news', ['title' => 'News']);
    // }

    public function index($news = false)
    {
        return view('news', [
            'title' => 'News',
            'news' => $news
        ]);
    }
}
