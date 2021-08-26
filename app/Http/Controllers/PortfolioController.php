<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryFolder;
use App\Models\Photo;
use App\Models\Staff;
use App\Models\Job;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class PortfolioController extends Controller
{
    
    public function sendtogallery($id)
    {
        $galleries=GalleryFolder::all();
        //$photos = GalleryFolder::find($id)->photos;
        //$name = $request->session()->get('name');
        $gallery = Staff::find($id)->galleryfolders;
        $staff = Staff::find($id);
        //$user = Auth::user()->name;
        $feedbacks = Staff::find($id)->feedbacks;
        //$users = $feedbacks->users;
        /*$photos = Photo::all();
        $galleries = Photo::has('galleries')->get();*/
        return view('portfolio.portfolio', ['gallery' => $gallery, 'staff' => $staff, /*'users' => $users,*/ 'feedbacks' => $feedbacks]);
        //dd(User::find(Auth::user()->id));
    }
    public function postFeedback($id, Request $request)
    {
        $galleries=GalleryFolder::all();
        $gallery = Staff::find($id)->galleryfolders;
        $staff = Staff::find($id);
        $feedbacks = Staff::find($id)->feedbacks;
        $request->validate([
            'name' => 'string|required',
            'feedback_text' => 'string|required|max:240',
        ]);
        Feedback::create([
            'feedback_text' => $request->feedback_text,
            'staff_id' => $request->staff_id,
            'user_id' => $request->user_id,
        ]);
        /*$feedback = new Feedback;
        $feedback->feedback_text = $request->feedback_text;
        $feedback->staff_id = $id;
        $feedback->user_id = $request->Auth::user()->id;*/
        $user = User::find($request->user_id);
        if (Auth::user()->name == null) {
            $user->update(['name' => $request->name]);
        }
        //$user->name = $request->name;
        //$user->save;
        //$feedback->save();
        //return view('portfolio', ['gallery' => $gallery, 'staff' => $staff, 'feedbacks' => $feedbacks]);
        header("Refresh:0");//обновление страницы и добавленние нового отзыва
    }
}
