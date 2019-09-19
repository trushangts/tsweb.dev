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
        // dd($users);
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
        
        if($user->save()){
            return redirect('/home')->with('success', 'New Employee Created..');
        }else{
            return redirect('/home')->with('error', 'New support ticket has been created! Wait sometime to get resolved');
        }        
    }

    public function updateUser(Request $request, $id)
    {   
        $user = new User();
        $data = $this->validate($request, [
                                            'name'=>'required',
                                            'email'=> 'required',
                                            "department_id" => '',
                                            "phone" => ''
                                        ]);
        $data['id'] = $id;
        $user->updateUser($data);
        return redirect()
            ->route('employee.list')
            //->route('empsingleview',$id)
            ->with('success','Updated the selected Employee!');
    }

    public function viewUser($id)
    {   
        $department = Departments::where('status',1)->get();
        $user = User::findOrFail($id);
        return view('employee.single',compact('department','user'));
    }

}
