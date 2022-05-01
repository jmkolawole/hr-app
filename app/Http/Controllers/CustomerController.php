<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //

    public function customers()
    {
        $roles = Role::all();
        $customers = User::with('role')->paginate(20);
        $operations = Operation::all();
        return view('welcome')->with(compact('roles','customers','operations'));
    }

    /* 
    
    public function assignUser(Request $request)
    {
        $user = User::where('id', $request['id'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_author']) {
            $user->roles()->attach(Role::where('name', 'Author')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        Session::flash('success', ' New role(s) assigned to user!');
        return redirect()->back();

    }*/

    public function assignOperation(Request $request){
        $role = Role::where('id', $request['role'])->first();
        $role->operations()->detach();
        
        if ($request['operation_read']) {
            $role->operations()->attach(Operation::where('operation', 'read')->first());
        }

        if ($request['operation_write']) {
            $role->operations()->attach(Operation::where('operation', 'write')->first());
        }

        if ($request['operation_delete']) {
            
            $role->operations()->attach(Operation::where('operation', 'delete')->first());
        }
        return redirect()->back();
    }

    public function addCustomer(Request $request)
    {
        //Validate request here
        User::create([
            'role_id' => $request->role_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'employee_id' => $request->employee_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('customers');
    }

    public function editCustomer(Request $request){
         $id = $request->route('id');
         $user = User::whereId($id)->first();
         
         $user->role_id = $request->role_id;
         $user->firstname = $request->firstname;
         $user->lastname = $request->lastname;
         $user->employee_id = $request->employee_id;
         $user->email = $request->email;
         $user->phone = $request->phone;
         $user->username = $request->username;
         $user->password = bcrypt($request->password);

         $user->save();
         return redirect()->route('customers');

    }

    public function deleteUser($id){
        User::find($id)->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);   
    }
}
