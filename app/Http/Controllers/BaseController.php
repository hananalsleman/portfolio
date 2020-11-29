<?php

namespace App\Http\Controllers;

use App\Technique; 
use App\Achievement; 
use App\Experience; 
use App\Personal_info;
use App\Social_Link;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function index()
    {
        $techniques = Technique::all();
        $achievements = Achievement::all();
        $experiences = Experience::all();
        $links = Social_Link::all();
        $info = Personal_info::all();
        
        return view('index', 
        ['techniques' => $techniques ,
        'achievements' => $achievements ,
        'experiences' => $experiences ,
        'links' => $links[0] ,
        'myinfo' => $info[0]]);
    }
}
