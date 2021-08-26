<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function servicecategory()
    {
        $categories = ServiceCategory::all();
        return view('servicelist');
    }
}
