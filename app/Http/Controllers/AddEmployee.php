<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Address;
class AddEmployee extends Controller
{
    public function addEmp() {
        return view('Empform');
    }
       
       public function store(Request $request){
        $Empdata = Employee::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'department' => $request->get('department'),
            'designation' => $request->get('designation'),
            'address' => $request->get('address'),
            'country' => $request->get('country')
        
        ]);
        $address = Address::create([
       'address' => $request->get('address'),
       'id' =>$Empdata->id,
        ]);
        $Empdata->save();
        $address->save();
     
        $Empdata = Employee::all()->toArray();
        $emp=Employee::query()
        ->join('addresses', 'employees.id', '=', 'addresses.id')
        ->select('employees.id','employees.name','employees.email','employees.department','employees.designation','employees.address','employees.country','addresses.address')
        ->get();
        return view('home',compact('Empdata'));
       }
    
}