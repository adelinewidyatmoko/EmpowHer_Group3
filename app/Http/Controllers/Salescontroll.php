<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Salescontroll extends Controller
{
    public function salesIndex(){
        $salesIndex = $this->getSales();
        return view('jobs.sales', ['salesIndex' => $salesIndex]);
    }
    public function getSales(){
        return DB::table('jobopportunity')->where('requirements', 'like', '%sales%')->get();
    }
}
