<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Http\Requests\SkillFormRequest;

class SkillsController extends Controller {

  // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function index()
  {
    $skills = Skill::all();
    return view('skills.index')->with('skills', $skills);
  }

  public function show($id)
  {
    $skill = Skill::find($id);
    return view('skills.show')->with('skill', $skill);
  }

  public function create()
  {
    $new_skill = new Skill();
    return view('skills.create')->with('skill', $new_skill); ;
  }

  public function edit($id)
  {
    $skill = Skill::find($id);
    return view('skills.edit')->with('skill', $skill); 
  }

  public function destroy($id)
  {
    $skill = Skill::find($id);
    if($skill) {
      if(!$skill->delete()) {
        // DO stuff
      }
    }
    return redirect('skills');
  }

  public function store(SkillFormRequest $request)
  {
    $skill = Skill::find($request->get('id'));
    if($skill){
      $skill->name = $request->get('name');
    } else {
       $skill = new Skill();
       $skill->name =  $request->get('name');
    }
    if ($skill->save()) {
      // do stuff
    }
    return redirect('skills');
  }

}