<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display the specified job.
     */
    public function show($id)
    {
        $job = DB::table('jobopportunity')->where('id', $id)->first();

        if (!$job) {
            abort(404);
        }

        return view('jobs.show', compact('job'));
    }

    /**
     * Display a listing of all jobs.
     */
    public function index()
    {
        $jobs = DB::table('jobopportunity')->get();

        return view('jobs.index', compact('jobs'));
    }
}
