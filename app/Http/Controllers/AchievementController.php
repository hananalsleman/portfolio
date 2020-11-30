<?php

namespace App\Http\Controllers;

use App\Achievement; 
use Illuminate\Http\Request;

class AchievementController extends Controller
{
     //add new achievement
     public function save(Request $request)
     {
       
         $this->validate($request, [
             'title' => 'required',
             'organisation' => 'required',
             'year' => 'required',
             'description' => 'required',
         ]);
 
         $achievement = new Achievement;
         $achievement->title = $request->title;
         $achievement->organisation = $request->organisation;
         $achievement->year = $request->year;
         $achievement->description = $request->description;
 
         $achievement->save();
         
         return back()->with('success', 'You added a new achievement successfully!');
 
     }
     
     //get Achievement 
     public function getAchievement($id)
     {
 
         $achievement = Achievement::find($id);
         return $achievement;
 
     }
     //update Achievement
     public function update($id,Request $request)
     {
         
         $this->validate($request, [
            'title' => 'required',
            'organisation' => 'required',
            'year' => 'required',
            'description' => 'required',
         ]);
 
         $achievement = Achievement::find($id);
         $achievement->title = $request->title;
         $achievement->organisation = $request->organisation;
         $achievement->year = $request->year;
         $achievement->description = $request->description;
 
         $achievement->save();
         
         return back()->with('success', 'You updated a achievement successfully!');
 
     }
     //delete Achievement
     public function destroy($id)
     {
         $achievement = Achievement::find($id);
 
         $achievement->delete();
 
         return back()->with('success', 'You deleted a achievement successfully!');
     }
}
