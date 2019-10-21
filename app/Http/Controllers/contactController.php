<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
class contactController extends Controller
{
    public function create(){
        return view('contact.contact');
    }
    public function store(Request $request){
        contact::create([
            'name'=>$request->get('name'),
            'phone'=>$request->get('phone'),
            'message'=>$request->get('message'),
            //'name'=> $request. get->(name);

        ]);
        return redirect('all_data');
    }
    public  function index(){
        $contacts = contact::get();
        return view('contact.index', compact('contacts'));
    }
    public function edit($id){
        $contacts = contact::findOrFail($id);
        return view('contact.edit', compact('contacts'));
    }

    public function update($id){
        $contacts = contact::findOrFail($id);
        $contacts->name = request('name');
        $contacts->phone = request('phone');
        $contacts->message = request('message');
        $contacts->save();
        return redirect('all_data');

    }
    public function destroy($id){
        $contacts = contact::findOrFail($id);
        $contacts->delete();
        return redirect('all_data');
    }



}
