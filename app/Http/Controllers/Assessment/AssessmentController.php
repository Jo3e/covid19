<?php

namespace App\Http\Controllers\Assessment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{

    public function index()
    {
        // return homepage
        return view('assessments.index');
    }

    public function create()
    {
        return view('assessments.new');
    }

    public function formReport()
    {
        return view('assessments.response');
    }

}
