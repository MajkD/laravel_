<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skill;
use App\Http\Requests\SkillFormRequest;
use App\Http\Controllers\Controller;

class SkillsController extends Controller {

  // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function index()
  {
    return Skill::all();
  }

  public function show($id)
  {
    // $skill = Skill::find($id);
    // return view('skills.show')->with('skill', $skill);
  }

  public function create()
  {
    // $new_skill = new Skill();
    // return view('skills.create')->with('skill', $new_skill); ;
  }

  public function edit($id)
  {
    // $skill = Skill::find($id);
    // return view('skills.edit')->with('skill', $skill); 
  }

  public function destroy($id)
  {
    // $skill = Skill::find($id);
    // if($skill) {
    //   if(!$skill->delete()) {
    //     // DO stuff
    //   }
    // }
    // return redirect('skills');
  }

  public function store(SkillFormRequest $request)
  {
    // $skill = Skill::find($request->get('id'));
    // if($skill){
    //   $skill->name = $request->get('name');
    // } else {
    //    $skill = new Skill();
    //    $skill->name =  $request->get('name');
    // }
    // if ($skill->save()) {
    //   // do stuff
    // }
    // return redirect('skills');
  }

}