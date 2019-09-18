<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function employee()
    {   
        $users = User::whereIn('role',[2,3])->get();;
        return view('employee.list',compact('users'));
    }
    
    public function addUser()
    {   
        return view('employee.add');
    }

    public function store(Request $request)
    {
        //dd($request->input());
        
  
        $user = new User();
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=> 'required',
            'password' => '',
            "role" => '',
            "phone" => ''
        ]);
       
        $user->saveUser($data);
        return redirect('/home')->with('success', 'New support ticket has been created! Wait sometime to get resolved');
    }

}
