<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Department;
use App\Professor;
use Illuminate\Support\Facades\DB;

class ClientIndexColtroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showClientIndexProfile()
    {
        $user = DB::table('professors')
		->join('departments','departments.dept_id','=','professors.dept_id')
		->select('professors.*','departments.depart_short_name')
        ->get();
		return view('index',['findprof' => $user ]);
    }

    public function showClientIndexEvent()
    {
        $eve = DB::table('sub_events') 
        ->join('events','events.e_id','=','sub_events.e_id')
        ->join('professors','professors.dept_id','=','professors.dept_id')
        ->join('departments','departments.dept_id','=','professors.dept_id')
		->select('sub_events.*','professors.*','departments.depart_short_name','events.e_name')
        ->get();
		return view('index',['findevents' => $eve ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
