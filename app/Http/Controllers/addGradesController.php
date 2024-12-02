<?php

namespace App\Http\Controllers;

use App\Models\GradeModel;
use Illuminate\Http\Request;

class addGradesController extends Controller
{
    public function index()
    {
        return view('addGrades');
    }

    public function dodajOcijenu(request $request)
    {
        $request->validate([
            "ime_predmeta" => "required|string|min:3|max:30",
            "ocijena" => "required|integer|min:0|max:5",
            "ime_profesora" => "required|string|min:3|max:30"
        ]);

        GradeModel::create([
            "ime_predmeta" => $request->get('ime_predmeta'),
            "ocijena" => $request->get('ocijena'),
            "ime_profesora" => $request->get('ime_profesora')
        ]);

        return redirect('/');
    }
}
