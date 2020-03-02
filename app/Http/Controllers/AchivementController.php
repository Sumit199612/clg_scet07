<?php

namespace App\Http\Controllers;
use App\Department;
use App\Professor;
use App\Achivement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AchivementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	/*public function __construct()
    {
        $this->middleware('auth:AdminPanel');
    }*/
	 
    public function index()
    {
        $achivements = DB::table('achivements')
                    ->join('departments','departments.dept_id','=','achivements.dept_id')
                    ->join('professors','professors.prof_id','=','achivements.prof_id')
                    ->select('achivements.*','departments.*','professors.*')
                    ->get();
        return view('AdminPanel/achivement',compact('achivements'));
    }
	
	public function showForm()
    {
        $departments = Department::all();
        $professors = Professor::all();
        $achivements = Achivement::all();
        return view('AdminPanel/add_achivement',compact('departments','professors','achivements'));
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
        $achivements = new Achivement();
        $achivements->dept_id = request('dept_id');
        $achivements->prof_id = request('prof_id');
        $achivements ->Activty_Type = request('Activtytype');
        $achivements ->Add_Details = request('details');
        $achivements ->save();
		
		return redirect('achivement');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Achivement  $achivement
     * @return \Illuminate\Http\Response
     */
    public function show( $Achivement_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achivement  $achivement
     * @return \Illuminate\Http\Response
     */
    public function edit($Achivement_id)
    {
        $findachivement = Achivement::find($Achivement_id);
        $departments = Department::all();
		$professors = Professor::all();
		return view('AdminPanel/edit_achivement',['findachivement' => $findachivement,'professors' => $professors ,'departments' => $departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achivement  $achivement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Achivement_id)
    {
         $achivement = Achivement::find($Achivement_id);
         $achivement->dept_id = request('dept_id');
         $achivement->prof_id = request('prof_id');
		 $achivement ->Activty_Type = request('Activtytype');
         $achivement ->Add_Details = request('details');
		 $achivement->save();
		return redirect('professor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achivement  $achivement
     * @return \Illuminate\Http\Response
     */
    public function destroy( $Achivement_id)
    {
         $achivement = Achivement::find($Achivement_id);
     	 $achivement->delete();
		session()->flash('message','Deleted Successfully');
		return redirect('/achivement');
    }
    // public function getdepartment(Request $request) 
	// {
    //     $professors = DB::table("professors")
    //                 ->where("dept_id",$request->dept_id)
    //                 ->OrderBy('f_name','ASC')
    //                 ->pluck("f_name","prof_id");
	// 	return response()->json($professors);
    // }
    
    public function getdepartment(Request $request) 
		{
			$professors = DB::table("professors")->where("dept_id",$request->dept_id)->OrderBy('fname','ASC')->get();
			return response()->json($professors);
		}
    	

}


