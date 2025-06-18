<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class FAQController extends Controller
{
    public function index()
    {
        // Get all reports ordered by newest first
        $reports = Report::orderBy('reportid', 'desc')->get();
        return view('faq', compact('reports'));
    }
}
