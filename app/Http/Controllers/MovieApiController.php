<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movie;

class MovieApiController extends Controller
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
        $movie = Movie::select('title', 'year')->get();
        $currentDate = date("Y");
        $movieDataAndYr = [];

        foreach($movie as $key=>$movies){
            if($movies->year){
                array_push($movieDataAndYr, array("title"=>$movies->title, "releaseYr"=>$movies->year, "yrsSinceRelease"=>$currentDate - $movies->year));
            }
        }
        return $movieDataAndYr;
    }
}
