<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function index(){
        $movies = Movie::orderBy('featured', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->get();
        return view('Member.categories', ['movies'=>$movies]);
    }
    public function action(){
        $movies = Movie::orderBy('featured', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->get();
        return view('Member.categories-action', ['movies'=>$movies]);
    }
    public function horror(){
        $movies = Movie::orderBy('featured', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->get();
        return view('Member.categories-horror', ['movies'=>$movies]);
    }
    public function anime(){
        $movies = Movie::orderBy('featured', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->get();
        return view('Member.categories-anime', ['movies'=>$movies]);
    }
    public function survival(){
        $movies = Movie::orderBy('featured', 'DESC')
        ->orderBy('created_at', 'DESC')
        ->get();
        return view('Member.categories-survival', ['movies'=>$movies]);
    }
}
