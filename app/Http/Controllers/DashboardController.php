<?php

namespace App\Http\Controllers;

use App\Technique; 
use App\Skill; 
use App\Achievement; 
use App\Experience; 
use App\Personal_info;
use App\Social_Link;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //home view
    public function index()
    {
        $techniques = Technique::all();
        $skills = Skill::all();
        $achievements = Achievement::all();
        $experiences = Experience::all();
        $links = Social_Link::all();
        $info = Personal_info::all();
        return view('dashboard/home', 
        ['techniques' => $techniques ,
        'skills' => $skills ,
        'achievements' => $achievements ,
        'experiences' => $experiences ,
        'links' => $links[0] ,
        'myinfo' => $info[0] ]);
    }

    //about view
    public function about()
    {
        $techniques = Technique::all();
        $skills = Skill::all();
        $info = Personal_info::all();
        return view('dashboard/about', 
        ['techniques' => $techniques ,
        'skills' => $skills ,
        'myinfo' => $info[0] ]);
    }
    
    //achievements view
    public function achievements()
    {
        $achievements = Achievement::all();
        return view('dashboard/achievements', 
        [ 'achievements' => $achievements ]);
    }

    //experience view
    public function experience()
    {
        $experiences = Experience::all();
        return view('dashboard/experience', 
        [ 'experiences' => $experiences ]);
    }
    //contact view
    public function contact()
    { 
        $links = Social_Link::all();
        $info = Personal_info::all();
        return view('dashboard/contact', 
        [
            'links' => $links[0] ,
            'myinfo' => $info[0]  ]);
    }
    public function editHomeInfo(Request $request){
        
        $request->validate([
            'image' => 'required'
        ]);
        
        $imageName = time().'-MyImage'.'.'.$request->image->extension();  
        $request->image->move(public_path('uploads'), $imageName);

        $me = Personal_info::find(0);
        $me->name = $request->name;
        $me->job = $request->job;
        $me->description = $request->description;
        $me->image = $imageName;

        $me->save();
        
        return back()->with('success', 'You edited Your Personal Info Successfully!');
    }

    
    public function editAboutmeInfo(Request $request){
        
        $me = Personal_info::find(0);
        $me->aboutme_title = $request->aboutme_title;
        $me->aboutme_description = $request->aboutme_description;
        $me->save();
        
        return back()->with('success', 'You edited Your About Info Successfully!');
    }
    
    public function editPersonalInfo(Request $request){
        
        $me = Personal_info::find(0);
        $me->sex = $request->sex;
        $me->marital_status = $request->marital_status;
        $me->nationality = $request->nationality;
        $me->languages = $request->languages;
        $me->save();
        
        return back()->with('success', 'You edited Your Personal Info Successfully!');
    }
    
    public function editContactmeInfo(Request $request){
        
        $me = Social_Link::find(0);
        $me->phone = $request->phone;
        $me->email = $request->email;
        $me->location = $request->location;
        $me->save();
        
        return back()->with('success', 'You edited Your Contact Info Successfully!');
    }

    public function editSocialLinks(Request $request){
        
        $me = Social_Link::find(0);
        $me->facebook = $request->facebook;
        $me->linkedin = $request->linkedin;
        $me->twitter = $request->twitter;
        $me->instagram = $request->instagram;
        $me->github = $request->github;
        $me->save();
        
        return back()->with('success', 'You edited Your Social Links Info Successfully!');
    }
}
