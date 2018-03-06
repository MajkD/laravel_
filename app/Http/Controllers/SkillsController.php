<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
      return view('admin.skills.index');
    }
}