<?php

namespace App\Http\Controllers;
use App\Department;
use App\Professor;
use App\Achivement;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $professors = Professor::join('departments', 'professors.dept_id', '=', 'departments.dept_id')
                 ->select('professors.*','departments.depart_short_name as depart_short_name')
                 ->get();
		return view('AdminPanel/professor',compact('professors'));
     }
    public function showForm()
    {
		$departments = Department::all();
        return view('AdminPanel/add_professor',compact('departments'));
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
        $professors = new Professor();
		$professors->dept_id = request('depart');
		$professors ->fname = request('fname');
		$professors ->lname = request('lname');
		$professors ->Qualification = request('Qualification');
		$professors ->dob = request('dob');
		$professors ->gender = request('gender');
		$professors ->position = request('position');
		$professors ->phone = request('phone');
		$professors ->email = request('email');
		$professors ->url = request('url');
		$professors ->area_interest = request('area');
		$professors ->exprience = request('exprience');
	
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
                $professors->proflie=$dbpath."/".$name;
               }

           }

        $professors->save();
		
		return redirect('professor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show($prof_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit($prof_id)
    {
        $findprof = Professor::find($prof_id);
		$departments = Department::all();
		 return view('AdminPanel/edit_professor',['findprof' => $findprof, 'departments' => $departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $prof_id)
    {
        $professor = Professor::find($prof_id);
		$professor->dept_id = request('depart');
		$professor ->fname = request('fname');
		$professor ->lname = request('lname');
		$professor ->Qualification = request('Qualification');
		$professor ->dob = request('dob');
		$professor ->gender = request('gender');
		$professor ->position = request('position');
		$professor ->phone = request('phone');
		$professor ->email = request('email');
		$professor ->url = request('url');
		$professor ->area_interest = request('area');
		$professor ->exprience = request('exprience');
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
                $professor->proflie=$dbpath."/".$name;
               }
           }
        $professor->save();
		
		return redirect('professor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy($prof_id)
    {
		 $professor = Professor::find($prof_id);
     	 $professor->delete();
		session()->flash('message','Deleted Successfully');
		return redirect('/professor');
    }
	
	public function showProfile($prof_id)
	{

        $findprof = DB::table('professors')
		->join('departments','departments.dept_id','=','professors.dept_id')
		->select('professors.*','departments.depart_full_name')
		->where('professors.prof_id','=',$prof_id)
        ->get();
        
		$findachivement = DB::table('achivements')
		->select('achivements.*')
		->where('achivements.prof_id','=',$prof_id)
        ->get();

        return view('AdminPanel/profile',['findprof' => $findprof[0], 'findachivement' => $findachivement ]);

	}
}
