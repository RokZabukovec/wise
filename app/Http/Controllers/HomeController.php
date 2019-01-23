<?php

namespace App\Http\Controllers;


use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with(['user' => Auth::user()]);
    }

    /*
    * Updates or sets users avatar.
    * @param Request
    * @return redirect()
    */

    public function updateAvatar(Request $request){
        $id = Auth::id();
        $avatarDirectory = '/uploads/avatars/';
        Image::make($request->avatar)->resize(100, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path($avatarDirectory) . time() . $request->avatar->getClientOriginalName());
        $avatar = '/uploads/avatars/' . time() . $request->avatar->getClientOriginalName();
        DB::table('users')->where('id', $id)->update(['avatar' => $avatar]);

        return redirect('home');
    }

}
