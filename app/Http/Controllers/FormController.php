<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contacts');
    }

    public function admin_index(Form $form) {
        $forms = Form::get();
       
        return view('admin.forms.index', compact('forms'));
    }
   
    public function delete_form(Request $request){
         $forms = Form::where('id', $request->id)->delete();
        
       return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
  
            Form::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);
        
    

        return redirect('/contacts')->with('message','We greatly appreciate you taking the time to get in touch with us. Your message has been received, and we will review it as soon as possible.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form, string $id)
    {
        //        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
