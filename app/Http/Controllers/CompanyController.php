<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
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

        return view('company.company');
    }

    public function create(){

        return view('company.register');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'img' => 'required',
            'web' => 'required'
            ]);

        if($request->hasFile('img')){

            //dd($request->file('img')->UploadedFile);
            $nameWithEx = $request->file('img')->getClientOriginalName();

            //$name = pathinfo($nameWithEx, PATHINFO_FILENAME);

            //$ext = $request->file('img')->getClientOriginalExtension();

            //$path = $request->file('img')->storeAs('public/images/', $nameWithEx);
            $path = $request->file('img')->store('img');
            //dd($path);

            dd(Storage::move($path, 'public'));

        }


        if($validator->fails()){
            return redirect('company');
        }

        

        return view('company.register');
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){


    }

    public function destroy($id){

    }
}
