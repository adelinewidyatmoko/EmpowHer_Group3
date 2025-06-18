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

    // freelancecontrol
    public function freelanceIndex(){
        $freelanceIndex = $this->getFreelance();
        return view('jobs.freelance', ['freelanceIndex' => $freelanceIndex]);
    }

    public function getFreelance()
    {
        return DB::table('jobopportunity')->where('title', 'like', '%freelance%')->get();
    }
    //marketingcontroll
     public function marketingIndex(){
        $marketIndex = $this->getMarketing();
        return view('jobs.marketing',['marketIndex' => $marketIndex]);
    }
    public function getMarketing(){
        return DB::table('jobopportunity')->where('requirements','like','%Market%')->get();
    }
    //salescontroll
    public function salesIndex(){
        $salesIndex = $this->getSales();
        return view('jobs.sales', ['salesIndex' => $salesIndex]);
    }
    public function getSales(){
        return DB::table('jobopportunity')->where('requirements', 'like', '%sales%')->get();
    }
    //tutorcontroll
     public function tutorIndex(){
        $tutorIndex = $this->getTutor();
        return view('jobs.tutoring', ['tutorIndex' => $tutorIndex]);
    }
    public function getTutor(){
        return DB::table('jobopportunity')->where('title', 'like', '%tutor%')->get();
    }


}
