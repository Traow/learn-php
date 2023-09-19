<?php

namespace App\Controllers;

use App\DB;
use App\Models\Article;
use App\Models\User;

class PublicController {
    public function home(){
        $articles = Article::all();
        view('home', compact('articles'));

    die();
        $name = 'Robi';
        $num = 10;
        view('home', compact('name', 'num'));
    }
    public function about(){
        view('about');
    }
    public function test(){
        var_dump($_GET);
        view('form');
    }

    public function testAnswer(){
        var_dump($_POST);
        var_dump($_POST);
        view('form');
    }
}