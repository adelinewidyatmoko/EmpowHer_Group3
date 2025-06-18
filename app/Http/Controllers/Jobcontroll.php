<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class jobcontroll extends Controller
{
    public function jobIndex(){
        $jobIndex = $this->getJob();
        return view('jobs.tech',['jobIndex' => $jobIndex]);
    }

    public function getJob(){
        return DB::table('jobopportunity')->where('requirements','like','%tech%')->get();
    }

    public function getId($id){
        $getid =  DB::table('jobopportunity')->where('idjobopportunity', $id)->get();
        return $getid;
    }
    public function getJobDetails($id){
        $jobDetails = $this->getId($id);
        return view('details.tech.swe', ['jobDetails' => $jobDetails]);
    }

    public function tutorIndex(){
        return view('jobs.tutoring');
    }
    public function salesIndex(){
        return view('jobs.sales');
    }
    public function marketingIndex(){
        return view('jobs.marketing');
    }
    public function freelanceIndex(){
        return view('jobs.freelance');
    }

}
