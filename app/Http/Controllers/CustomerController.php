<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class CustomerController extends Controller
{
    public function getCustomer(){
        
        
        return response()->json(Employee::all(),200);




    }
    
    public function getCustomerById($id){
        $employee=Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=>'id is required'],404);
        }

        
        return response()->json($employee::find($id),200);
    }

    public function addCustomer(Request $request){
        // print $request->all();
        echo $request;


        $addCustomer=Employee::create($request->all());

        

        
        return response()->json($addCustomer,201);

    }

    public function updateCustomer(Request $request,$id){
        $employee=Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=>'id is required'],404);
        }
        $employee->update($request->all());
        return response()->json($employee,200);
    }
    public function deleteCustomer($id){
        $employee=Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message'=>'id is required'],404);
        }
        $employee->delete();
        return response()->json(null,204);
    }
}
