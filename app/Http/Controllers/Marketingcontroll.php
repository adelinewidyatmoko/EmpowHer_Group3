<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Marketingcontroll extends Controller
{
    public function marketingIndex(){
        $marketIndex = $this->getMarketing();
        return view('jobs.marketing',['marketIndex' => $marketIndex]);
    }
    public function getMarketing(){
        return DB::table('jobopportunity')->where('requirements','like','%Market%')->get();
       

    }
}
