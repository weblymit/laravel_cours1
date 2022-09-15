<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmilyController extends Controller
{

    public function index()
    {
        $title = "My first post2";
        return view("welcome", compact('title'));
        // return view("welcome")->with("title", $title);
    }
    public function about()
    {
        return view("about");
    }

    public function show($id)
    {
        $posts = [
            1 => "Toto à la piscine",
            2 => "Toto à la montagne",
            3 => "Toto à la ferme",
        ];

        $postId = $posts[$id];

        return view("post", ["post" => $postId]);
    }
}
