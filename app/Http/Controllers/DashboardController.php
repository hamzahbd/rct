<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function project()
    {
        return view('dashboard.project.index', [
            "projects" => Project::latest()->get()
        ]);
    }


    //
}
