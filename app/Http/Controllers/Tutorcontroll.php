<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Tutorcontroll extends Controller
{
    public function tutorIndex(){
        $tutorIndex = $this->getTutor();
        return view('jobs.tutoring', ['tutorIndex' => $tutorIndex]);
    }
    public function getTutor(){
        return DB::table('jobopportunity')->where('title', 'like', '%tutor%')->get();
    }
}
