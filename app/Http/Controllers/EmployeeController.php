<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(){

        $employee = Employee::all();

        return view('employee.employee')->with('employee', $employee);
    }

    public function create(){

        return view('employee.register');
    }

    public function store(Request $request){

        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            ]);

        /*if($validator->fails()){
            return redirect('employee/create')
                            ->withErrors($validator)
                            ->withInput();
        }*/

        $employee = new Employee;
        $employee->first_name = $request->fname;
        $employee->last_name = $request->lname;
        $employee->company = $request->company;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->save();


        return view('employee.register');
    }
}
