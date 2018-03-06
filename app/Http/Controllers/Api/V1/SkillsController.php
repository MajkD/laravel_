<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Skill;
use App\Http\Requests\SkillFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use Log;
// Log::error("Api/V1/SkillsController - store");

class SkillsController extends Controller {

  // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function index()
  {
    return Skill::all();
  }

  public function store(SkillFormRequest $request)
  {
    $skill = Skill::create($request->all());
    return $skill;
  }

  public function show($id)
  {
    return Skill::findOrFail($id);
  }

  public function update(SkillFormRequest $request, $id)
  {
    $skill = Skill::findOrFail($id);
    $skill->update($request->all());
    return $skill;
  }

  public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return '';
    }

}