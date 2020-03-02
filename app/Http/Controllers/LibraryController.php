<?php

namespace App\Http\Controllers;

use App\Department;
use App\professor;
use App\Library;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $librarys = DB::table('librarys')
                ->join('professors','professors.prof_id', '=','librarys.prof_id')
                ->join('departments','departments.dept_id','=','professors.dept_id')
                ->select('librarys.*','professors.*','departments.*')
                ->get();

        return view('AdminPanel/library',compact('librarys'));
    }
    public function showForm()
    {
		$librarys = Library::all();
		$departments = Department::all();
		$professors = Professor::all();
        return view('AdminPanel/add_library',compact('librarys','departments','professors'));
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
        $lib = new Library;
        $lib->dept_id = request('depart');
        $lib->prof_id = request('professor');
		$lib->l_name = request('l_name');
        $lib->email = request('email');
        $lib->extension_no = request('extension_no');
        $lib->details = request('detail');
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
                $lib->profile=$dbpath."/".$name;
            }
        }
        $lib->save();
		return redirect('library');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show($l_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit($l_id)
    {
        $findlib = Library::find($l_id);
        $departments = Department::all();
        $professors = Professor::all();
		return view('AdminPanel/edit_library',['findlib' => $findlib,'departments' => $departments,'professors'=>$professors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$l_id)
    {
        $lib = Library::find($l_id);
        $lib->dept_id = request('depart');
        $lib->prof_id = request('professor');
        $lib->l_name = request('l_name');
        $lib->email = request('email');
        $lib->extension_no = request('extension_no');
        $lib->details = request('detail');
        if($img=$request->file('file'))
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
                $lib->profile=$dbpath."/".$name;
            }
        }
        $lib->save();
		return redirect('library');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy($l_id)
    {
        $lib = Library::find($l_id);
		$lib->delete();
		return redirect('/library');
    }
}
