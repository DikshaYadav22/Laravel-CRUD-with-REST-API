<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
        $allData = Form::all();
        return response($allData, 200);
    }

    public function store(Request $request)
    {
        $data = Form::create([
            'firstName'=>$request->firstName,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        return response()->json($data);
    }

    public function show(Form $form)
    {
       return $form;
    }

    
    public function update(Request $request, Form $form)
    {
        $updatedData = $form->update([
            'firstName'=>$request->firstName,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        return response()->json($updatedData);

        
    }

   
    public function destroy(Form $form)
    {
        $deletedData = $form->delete(); 
        return response()->json($deletedData);
    }
}
