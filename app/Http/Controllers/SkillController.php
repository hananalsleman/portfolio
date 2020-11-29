<?php

namespace App\Http\Controllers;

use App\Skill; 
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //add new skill
    public function save(Request $request)
    {
      
        $this->validate($request, [
            'name' => 'required',
            'percentage' => 'required',
        ]);

        $skill = new Skill;
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;

        $skill->save();
        
        return back()->with('success', 'You added a new skill successfully!');

    }
    
    //get skill 
    public function getSkill($id)
    {

        $skill = Skill::find($id);
        return $skill;

    }
    //update skill
    public function update($id,Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'percentage' => 'required',
        ]);

        $skill = Skill::find($id);
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;

        $skill->save();
        
        return back()->with('success', 'You updated a skill successfully!');

    }
    //delete skill
    public function destroy($id)
    {
        $skill = Skill::find($id);

        $skill->delete();

        return back()->with('success', 'You deleted a skill successfully!');
    }
}
