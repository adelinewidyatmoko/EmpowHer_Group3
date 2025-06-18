<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Freelancecontroll extends Controller
{
    public function freelanceIndex()
    {
        $freelanceIndex = $this->getFreelance();
        return view('jobs.freelance', ['freelanceIndex' => $freelanceIndex]);
    }

    public function getFreelance()
    {
        return DB::table('jobopportunity')->where('title', 'like', '%freelance%')->get();
    }
}
