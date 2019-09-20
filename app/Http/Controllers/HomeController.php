<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Departments;

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
        // $users = User::find(1);
        // dd($users->departments->name);
        // dd($users->departments->name);        
        // exit;
        return view('home');
    }

    public function employee()
    {   
        $users = User::whereIn('role',[2,3])->with('departments')->get();
        return view('employee.list',compact('users'));
    }
    
    public function addUser()
    {   
        $department = Departments::where('status',1)->get();
        return view('employee.add',compact('department'));
    }

    public function store(Request $request)
    {   
        //dd($request->input());
        $request->validate(['name'=>'required',
                            "department_id" => '',
                            'email'=> 'required',
                            'password' => '',                                        
                            "phone" => '']);

        $user = new User([
            'name' => $request->get('name'),
            'department_id' => $request->get('department_id'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => $request->get('password')
        ]);
        
        $fileName = "fileName".time().'.'.request()->eimg->getClientOriginalExtension();
        $request->eimg->storeAs('eimg',$fileName);
        $user->photo = $fileName;
        if($user->save()){
            return redirect('/home')->with('success', 'New Employee Created..');
        }else{
            return redirect('/home')->with('error', 'New support ticket has been created! Wait sometime to get resolved');
        }        
    }
    
    public function update(Request $request,$id)
    {
        $request->validate(['name'=>'required',
                            "department_id" => '',
                            'email'=> 'required',
                            "phone" => '']);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->department_id = $request->get('department_id');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');

        if($user->save()){
            return redirect()->route('employee.list')->with('success', 'New Employee Created..');
        }else{
            return redirect()->route('employee.list')->with('error', 'New support ticket has been created! Wait sometime to get resolved');
        }
    }
    
    public function viewUser($id)
    {   
        $department = Departments::where('status',1)->get();
        $user = User::findOrFail($id);
        return view('employee.single',compact('department','user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete()){
            return redirect()->route('employee.list')->with('success', 'Employee Deleted..');
        }else{
            return redirect()->route('employee.list')->with('error', 'Error');
        }        
    }

}
