<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\About;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::where('featured', true)->orWhere('featured', false)->orderBy('order')->limit(6)->get();
        $skills = Skill::orderBy('category')->orderBy('order')->get();
        $about = About::first();

        return view('portfolio.index', compact('projects', 'skills', 'about'));
    }
}
