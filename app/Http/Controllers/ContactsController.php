<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Http\Requests;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::all();
        return response()->json($contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts=new Contacts();
        $contacts->name=$request->input('name');
        $contacts->number=$request->input('number');
        $contacts->save();
        return response()->json($contacts);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts=Contacts::findorFail($id);
        return response()->json($contacts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacts=Contacts::findorFail($id);
        $contacts->name=$request->input('name');
        $contacts->number=$request->input('number');
        $contacts->save();
        return response()->json($contacts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts=Contacts::findorFail($id);
        if($contacts->delete()){
            return response()->json($contacts);
        }
    }
}
