<?php

namespace App\Http\Controllers;

use App\Technique; 
use App\Skill; 
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
        
        return view('pages/home', 
        ['techniques' => $techniques ,
        'achievements' => $achievements ,
        'experiences' => $experiences ,
        'links' => $links[0] ,
        'myinfo' => $info[0]]);
    }
    public function getAchievements()
    {
        $achievements = Achievement::all();
        $links = Social_Link::all();
        return view('pages/achievements', 
        [ 'links' => $links[0] ,
         'achievements' => $achievements ]);
    }
    public function getExperiences()
    {
        $experiences = Experience::all();
        $links = Social_Link::all();
        return view('pages/experience', 
        [ 'links' => $links[0] ,
         'experiences' => $experiences  ]);
    }
    public function getAbout()
    {
        $links = Social_Link::all();
        $info = Personal_info::all();
        $skills = Skill::all();
        $techniques = Technique::all();
        return view('pages/about', 
        [ 'links' => $links[0] ,
          'techniques' => $techniques ,
          'skills' => $skills ,
          'myinfo' => $info[0] ]);
    }
}
