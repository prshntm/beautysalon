<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Staff;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuccessfulAppointment;

class AppointmentController extends Controller
{
    public function choosestaff2($serv_id)
    {
        $staff = Staff::all();
        $jobs = Staff::has('jobs')->get();
        $service = Service::find($serv_id);
        return view('appointment.appointment', ['serv_id' => $serv_id, 'staff' => $staff, 'jobs' => $jobs]); 
    }
    public function chooseService($services)//страница "записаться" из меню
    {
        $services = ServiceCategory::find(1)->services;
        $categories = ServiceCategory::all();
        return view('appointment.appointment2', ['services' => $services, 'categories' => $categories]);
    }
    public function chooseService2($staff_id)//страница услуги после страницы онлайн-записи
    {
        $categories = ServiceCategory::get()->toTree();
        $services = ServiceCategory::find(1)->services;
        $staff = Staff::find($staff_id);
        //dd($services, $categories, $staff_id);
        return view('servicelist2', ['services' => $services, 'categories' => $categories, 'staff_id' => $staff_id]);
    }
    public function chooseCategory($staff_id, $id)
    {
        $categories = ServiceCategory::get()->toTree();
        $services = ServiceCategory::find($id)->services;
        $staff = Staff::find($staff_id);
        return view('servicelist2', ['services' => $services, 'categories' => $categories, 'staff_id' => $staff_id]);

    }
    public function choosestaff()
    {
        $categories = Service::has('servicecategories')->get;
        $services = ServiceCategory::find(1)->services;
        $staff = Staff::all();
        $jobs = Staff::has('jobs')->get();
        return view('appointment.appointment2', ['staff' => $staff, 'jobs' => $jobs, 'categories' => $categories]); 
    }
    public function choosestaff3()//страница "записаться" из меню
    {
        $categories = ServiceCategory::get()->toTree();
        $services = ServiceCategory::find(1)->services;
        $staff = Staff::all();
        $jobs = Staff::has('jobs')->get();
        return view('appointment.appointment2', ['staff' => $staff, 'jobs' => $jobs, 'categories' => $categories, 'services' => $services]); 
    }

    public function makeAppoint()
    {
        /*$staff = Staff::all();
        $jobs = Staff::has('jobs')->get();*/
        return view('appointment.makeappointment'/*, ['staff' => $staff, 'jobs' => $jobs]*/); 
    }
    public function showAppoint($serv_id, $staff_id)
    {
        $staff = Staff::find($staff_id);
        $service = Service::find($serv_id);
        $user = Auth::user()->id;
        return view('appointment.makeappointment', ['staff' => $staff, 'serv_id' => $serv_id, 'staff_id' => $staff_id, 'service' => $service, 'user' => $user]);
        //dd($serv_id, $staff_id, $staff, $service,$user); 
    }
    public function showServAppoint($serv_id)
    {
        $staff = Staff::find($staff_id)->appointments;
        $service = Service::find($serv_id)->appointments;
        $user = Auth::user()->id;
        return view('appointment.appointment', ['serv_id' => $serv_id, 'user' => $user]); 
    }
    public function saveAppoint(Request $request)
    {
        /*$service = Service::find($request->service_id);
        $service_duration = /*Service::find($request->service_id)->pluck('duration')Carbon::parse($service['duration']);
        $time_start = Appointment::select('*')->pluck('time_start');
        $time_interval = $time_start->addMinutes($service_duration);
        $appointments = Appointment::select('*')
            ->where('staff_id', $request->staff_id)
            ->whereBetween('time_start', [$request->time_start, ($time_start->addMinutes($service_duration))])
            ->get();
        if ($appointments == true)
            /*(DB::table('appointments'
            ->where('staff_id', $request->staff_id)
            ->where('time_start', $request->time_start)
            ->doesntExist()))
        {*/
            $time_start = Appointment::select('*')->pluck('time_start');
            $date_start = Appointment::select('*')->pluck('appoint_date');
            $chosen_staff = Appointment::select('*')->pluck('staff_id');
            if (($time_start != $request->time_start) && ($date_start !=  $request->dateToday) && ($chosen_staff != $request->staff_id))
            {
                Appointment::create([
                    'staff_id' => $request->staff_id,
                    'service_id' => $request->service_id,
                    'user_id' => Auth::user()->id,
                    'time_start' => $request->time_start,
                    'appoint_date' => $request->dateToday,
                    ]);
                $user = User::find(Auth::user()->id);
                if (Auth::user()->name == null)
                {
                    $user->update(['name' => $request->name]);
                }
                $appointment = array(
                'name' => $request->name,
                'dateToday' => $request->dateToday,
                'time_start' => $request->time_start,
                'staff' => $request->staff,
                'service' => $request->service);
                Mail::to(Auth::user()->email)->send(new SuccessfulAppointment($appointment));
                return back()->with('success', 'Запись прошла успешно. Данные о записи отправлены Вам на электронную почту');
                //return redirect('makeappointment'); 
            }
            else
            {
                return redirect()->back()->withErrors(['Ошибка', 'Вы не можете записаться на выбранное время, так как оно уже занято другим клиентом. Выберите другое']);
                //$request->session()->flash('alert-danger', 'Вы не можете записаться на выбранное время, так как оно уже занято другим клиентом');
            }
        /*}
        else
        {
            return('makeappointment')->withErrors('error', 'К сожалению, данное время на запись занято. Выберите, пожалуйста, другое');
        }*/
        
        /*$appointment = new Appointment;
        $appointment->staff_id = $staff_id;
        $appointment->service_id = $serv_id;
        $appointment->user_id = $user;
        $appointment->time_start = $request->time;
        $appointment->appoint_date = $request->date;
        Auth::user()->name = $request->name;*/
        //$appointment->save();
        /*$staff = Staff::find($staff_id)->appointments;
        $service = Service::find($serv_id)->appointments;
        $user = Auth::user()->id;*/
        //dd($request->dateToday);
    }
    public function adminAppointment()
    {

        $appointments = Appointment::all()->sortBy('staff_id');
        /*$date_appoint = Appointment::all()->pluck('appoint_date');
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date_appoint)->format('d-m-Y');*/
        $staff = Staff::has('appointments')->get();
        $services = Service::has('appointments')->get();
        $users = Appointment::has('users')->get();
        return view('admin.appoint_admin', ['appointments' => $appointments, 'staff' => $staff, 'services' => $services, 'users' => $users]);
        //dd($newDate);
    }
    public function deleteAppointment($id)
    {
        $appointments = Appointment::all()->sortBy('staff_id');
        $staff = Staff::has('appointments')->get();
        $del_appoint = Appointment::find($id);
        if ($del_appoint != null)
        {
            $del_appoint->delete();
            return back()->with('success', 'Запись удалена');
        }
        else
        {
            return redirect()->back()->with()->withErrors(['Ошибка', 'Не удалось удалить запись, попробуйте ещё раз']);
        }
    }

    
}
