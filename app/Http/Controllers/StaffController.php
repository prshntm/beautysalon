<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Job;

class StaffController extends Controller
{
    public function staffGallery()
    {
        $staff = Staff::all();
        $employees = Staff::find(1);
        /*$job = $staff->jobs;
        $job = Job::find(1)->jobs;
        $job_name= $job->job_name;*/

        return view('mainpage', ['staff' => $staff, 'employees'=>$employees/*, 'job_name'=>$job_name*/]);
    }
}
