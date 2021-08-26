<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{
    public function serviceList()
    {
        $categories = ServiceCategory::get()->toTree();
        $services = ServiceCategory::find(1)->services; //исправить
        //$services = ServiceCategory::find(1)->services;
        /*$categories = ServiceCategory::all();
        $services= $categories->services;*/
        return view('service.servicelist', ['services' => $services, 'categories' => $categories]);
    }
    public function serviceList2($staff_id)
    {
        $categories = ServiceCategory::get()->toTree();
        $services = ServiceCategory::find(1)->services; //исправить
        //$services = ServiceCategory::find(1)->services;
        /*$categories = ServiceCategory::all();
        $services= $categories->services;*/
        dd($staff_id);
        //return view('servicelist', ['services' => $services, 'categories' => $categories, 'staff_id' => $staff_id]);
    }
    public function servicePartial($id)
    {
        $categories = ServiceCategory::get()->toTree();
        $services = ServiceCategory::find($id)->services;
        //$cat_name = $services->services->category_name;
        //$id = $request->input(ServiceCategory::find(1)->services()->where('category_id', ));
        /*$categories = ServiceCategory::all();
        $services= $categories->services;*/
        //$id = $request->route()->parameter('id');
        return view('service.servicelist', ['services' => $services, 'categories' => $categories]);
        //dd($services);
        //return('service_partial/{$categories->id}', ['services' => $services, 'categories' => $categories, 'cat_id'=> $cat_id]);
    }
    public function servicePartial2($id, $staff_id)
    {
        $categories = ServiceCategory::get()->toTree();
        $services = ServiceCategory::find($id)->services;
        //$cat_name = $services->services->category_name;
        //$id = $request->input(ServiceCategory::find(1)->services()->where('category_id', ));
        /*$categories = ServiceCategory::all();
        $services= $categories->services;*/
        //$id = $request->route()->parameter('id');
        return view('service.servicelist', ['services' => $services, 'categories' => $categories, 'staff_id' => $staff_id]);
        //dd($services);
        //return('service_partial/{$categories->id}', ['services' => $services, 'categories' => $categories, 'cat_id'=> $cat_id]);
    }
    /*public function servicePart()
    {
        return view('service_partial');
    }*/
}
