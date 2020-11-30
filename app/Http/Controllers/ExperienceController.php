<?php

namespace App\Http\Controllers;

use App\Experience; 
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
     //add new experience
     public function save(Request $request)
     {
       
         $this->validate($request, [
             'title' => 'required',
             'organisation' => 'required',
             'start_month' => 'required',
             'start_year' => 'required',
             'end_month' => 'required',
             'end_year' => 'required',
             'country' => 'required',
             'description' => 'required',
         ]);
 
         $experience = new Experience;
         $experience->title = $request->title;
         $experience->organisation = $request->organisation;
         $experience->country = $request->country;
         $experience->start_month = $request->start_month;
         $experience->start_year = $request->start_year;
         $experience->end_month = $request->end_month;
         $experience->end_year = $request->end_year;
         $experience->description = $request->description;
 
         $experience->save();
         
         return back()->with('success', 'You added a new experience successfully!');
 
     }
     
     //get Experience 
     public function getexperience($id)
     {
 
         $experience = Experience::find($id);
         return $experience;
 
     }
     //update Experience
     public function update($id,Request $request)
     {
         
        $this->validate($request, [
            'title' => 'required',
            'organisation' => 'required',
            'start_month' => 'required',
            'start_year' => 'required',
            'end_month' => 'required',
            'end_year' => 'required',
            'country' => 'required',
            'description' => 'required',
        ]);

 
         $experience = Experience::find($id);
         $experience->title = $request->title;
         $experience->organisation = $request->organisation;
         $experience->country = $request->country;
         $experience->start_month = $request->start_month;
         $experience->start_year = $request->start_year;
         $experience->end_month = $request->end_month;
         $experience->end_year = $request->end_year;
         $experience->description = $request->description;
 
         $experience->save();
         
         return back()->with('success', 'You updated a experience successfully!');
 
     }
     //delete Experience
     public function destroy($id)
     {
         $experience = Experience::find($id);
 
         $experience->delete();
 
         return back()->with('success', 'You deleted a experience successfully!');
     }
}
