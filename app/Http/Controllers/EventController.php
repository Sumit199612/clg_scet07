<?php

namespace App\Http\Controllers;

use App\Event;
use App\Department;
//use App\Events\LeadSignup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::join('departments', 'events.dept_id', '=', 'departments.dept_id')
               ->select('events.*','departments.*')
                ->get();
                
        return view('AdminPanelPanel/event',compact('events'));
    }
    public function showForm()
    {
        $departments = Department::all();
        return view('AdminPanel/add_event',compact('departments'));
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
        $events = new Event;
        $events->dept_id = request('dept_id');
		$events->e_name = request('e_name');
		$events->save();
		return redirect('event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($e_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($e_id)
    {
        $findeve = Event::find($e_id);
        $departments = Department::all();
        return view('AdminPanel/edit_event',['findeve' => $findeve, 'departments' => $departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$e_id)
    {
        $eve = Event::find($e_id);
        $eve->dept_id = request('dept_id');
		$eve->e_name = request('e_name');
		$eve->save();
		return redirect('event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($e_id)
    {
        $eve = Event::find($e_id);
		$eve->delete();
		return redirect('event');
    }
}
