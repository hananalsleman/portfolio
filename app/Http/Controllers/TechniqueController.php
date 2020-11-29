<?php

namespace App\Http\Controllers;

use App\Technique; 
use Illuminate\Http\Request;

class TechniqueController extends Controller
{
     //add new technique
     public function save(Request $request)
     {
       
         $this->validate($request, [
             'name' => 'required',
             'percentage' => 'required',
         ]);
 
         $technique = new Technique;
         $technique->name = $request->name;
         $technique->percentage = $request->percentage;
 
         $technique->save();
         
         return back()->with('success', 'You added a new technique successfully!');
 
     }
     
     //get technique 
     public function getTechnique($id)
     {
 
         $technique = Technique::find($id);
         return $technique;
 
     }
     //update technique
     public function update($id,Request $request)
     {
         
         $this->validate($request, [
             'name' => 'required',
             'percentage' => 'required',
         ]);
 
         $technique = Technique::find($id);
         $technique->name = $request->name;
         $technique->percentage = $request->percentage;
 
         $technique->save();
         
         return back()->with('success', 'You updated a technique successfully!');
 
     }
     //delete technique
     public function destroy($id)
     {
         $technique = Technique::find($id);
 
         $technique->delete();
 
         return back()->with('success', 'You deleted a technique successfully!');
     }
}
