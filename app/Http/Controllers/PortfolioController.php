<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::where('featured', true)->orWhere('featured', false)->orderBy('order')->limit(6)->get();
        $skills = Skill::orderBy('category')->orderBy('order')->get();
        $about = About::first();
        $education = Education::orderBy('order')->get();
        $experiences = Experience::orderBy('order')->get();

        return view('portfolio.index', compact('projects', 'skills', 'about', 'education', 'experiences'));
    }
}
