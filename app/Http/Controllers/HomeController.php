<?php

namespace App\Http\Controllers;

use App\Models\GradeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $grades = GradeModel::all();

        return view('welcome', compact('grades'));
    }
}
