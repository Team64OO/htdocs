<?php

namespace App\Http\Controllers;

use App\Models\Projects;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        $projects = Projects::get();
        $_SESSION['role'] = 'admin';
        return view('home', [
            'projects'=>$projects 
        ]);
    }
}