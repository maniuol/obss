<?php

namespace Bitfumes\Multiauth\Http\Controllers;

use Illuminate\Routing\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Bitfumes\Multiauth\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
    }

    public function index()
    {
        return view('multiauth::admin.home');
    }

    public function show()
    {
        $admins = Admin::where('id', '!=', 1)->get();

        return view('multiauth::admin.show', compact('admins'));
    }

    public function profile()
    {
         // $admin=Auth::user()->name;
         //var_dump($admin);exit;
        
        //return view('multiauth::admin.profile',compact('admin'));
         return view('multiauth::admin.profile')->with('name', Auth::user()->name)
                                                ->with('email', Auth::user()->email)
                                                ->with('password', Auth::user()->password);
    }

     //admin profile update

    public function admin_profile(AdminRequest $request,$id)
    {
       echo "yes";
    }
}
