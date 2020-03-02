<?php

namespace App\Http\Controllers;

use App\Administration;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrations = Administration::all();
        return view('AdminPanel/administration',compact('administrations'));
    }
    public function showForm()
    {
        return view('AdminPanel/add_administration');
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
        $admi = new Administration;
        if($img=$request->file('image'))
           {
               $x= $img->getClientOriginalExtension();
               $valid=["jpg","png","jpeg"];
               if(!in_array($x,$valid))
               {
                   dd("Please select proper image");
               }
               else
               {
                $name=time().".".$x;
                $dbpath='images';
                $img->move(public_path($dbpath),$name);
                $admi->image=$dbpath."/".$name;
               }
           }

        $admi->a_name = request('a_name');
		$admi->designation = request('designation');
		$admi->qualification = request('qualification');
        $admi->expirence = request('expirence');
        $admi->email = request('email');
        $admi->phone = request('phone');
        $admi->role= request('role');
		$admi->save();
		return redirect('administration');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function show($a_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function edit($a_id)
    {
        $findadmi = Administration::find($a_id);
		 return view('AdminPanel/edit_administration',['findadmi' => $findadmi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$a_id)
    {
        $admi = Administration::find($a_id);
        if($img=$request->file('image'))
           {
               $x= $img->getClientOriginalExtension();
               $valid=["jpg","png","jpeg"];
               if(!in_array($x,$valid))
               {
                   dd("Please select proper image");
               }
               else
               {
                $name=time().".".$x;
                $dbpath='images';
                $img->move(public_path($dbpath),$name);
                $admi->image=$dbpath."/".$name;
               }
           }

        $admi->a_name = request('a_name');
		$admi->designation = request('designation');
		$admi->qualification = request('qualification');
        $admi->expirence = request('expirence');
        $admi->email = request('email');
        $admi->phone = request('phone');
        $admi->role= request('role');
        $admi->save();
		return redirect('administration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administration  $administration
     * @return \Illuminate\Http\Response
     */
    public function destroy($a_id)
    {
        $admi = Administration::find($a_id);
		$admi->delete();
		return redirect('administration');
    }
}
