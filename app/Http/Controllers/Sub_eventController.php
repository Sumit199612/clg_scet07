<?php

namespace App\Http\Controllers;
use App\Sub_event;
use App\Event;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sub_eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$sub_events = DB::table('sub_events')
                        ->join('events','events.e_id', '=','sub_events.e_id')
                        ->join('departments','departments.dept_id','=','sub_events.dept_id')
                        ->select('sub_events.*','events.*','departments.*')
                        ->get();


        return view('AdminPanel/sub_event',compact('sub_events'));
    }
    public function showForm()
    {
        $events = Event::all();
		$departments = Department::all();
        return view('AdminPanel/add_sub_event',compact('events','departments'));
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
        $sub_event = new Sub_event();
        $sub_event->e_id = request('event');
        $sub_event->dept_id = request('department');
        $sub_event->se_name = request('se_name');
        $sub_event->details = request('details');
        if($img=$request->file('file'))
        {
            $x= $img->getClientOriginalExtension();
            $valid=["jpg","png","jpeg"];
            if(!in_array($x,$valid))
            {
                dd("Please Select Only Image");
            }
            else
            {
                $name=time().".".$x;
                $dbpath='images';
                $img->move(public_path($dbpath),$name);
                $sub_event->profile=$dbpath."/".$name;
            }
        }
        $sub_event->save();
		return redirect('sub_event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sub_event  $sub_event
     * @return \Illuminate\Http\Response
     */
    public function show($se_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sub_event  $sub_event
     * @return \Illuminate\Http\Response
     */
    public function edit($se_id)
    {
        $findsub = Sub_event::find($se_id);
        $departments = Department::all();
        $events = Event::all();
		return view('AdminPanel/edit_sub_event',['findsub' => $findsub, 'departments' => $departments,'events'=>$events]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sub_event  $sub_event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $se_id)
    {
        $sub_event = Sub_event::find($se_id);
        $sub_event->e_id = request('event');
        $sub_event->dept_id = request('department');
        $sub_event->se_name = request('se_name');
        $sub_event->details = request('details');
        if($img=$request->file('file'))
        {
            $x= $img->getClientOriginalExtension();
            $valid=["jpg","png","jpeg"];
            if(!in_array($x,$valid))
            {
                dd("Please Select Only Image");
            }
            else
            {
                $name=time().".".$x;
                $dbpath='images';
                $img->move(public_path($dbpath),$name);
                $sub_event->profile=$dbpath."/".$name;
            }
        }
        $sub_event->save();
		return redirect('/sub_event');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sub_event  $sub_event
     * @return \Illuminate\Http\Response
     */
    public function destroy($se_id)
    {
        $sub_event = Sub_event::find($se_id);
        $sub_event->delete();
        session()->flash('message','Deleted Successfully');
        return redirect('/sub_event');
 
    }

    

    
}
