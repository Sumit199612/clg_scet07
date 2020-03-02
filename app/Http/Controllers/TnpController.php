<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Tnp;
use Illuminate\Http\Request;

class TnpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tnps = Tnp::all();
		return view	('AdminPanel/tnp', compact('tnps'));
    }
	public function showForm()
    {
        return view('AdminPanel/add_tnp');
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
		 $tnp = new Tnp;
		 $tnp->tnp_name = request('tnp_name');
		 if($img=$request->file('file'))
           {
               $x= $img->getClientOriginalExtension();
               $valid=["pdf","docx","xlsx","doc"];
               if(!in_array($x,$valid))
               {
                   dd("Please select proper file");
               }
               else
               {
                $name=time().".".$x;
                $dbpath='document';
                $img->move(public_path($dbpath),$name);
                $tnp->flie=$dbpath."/".$name;
               }
           }
	   	 $tnp->save();
		return redirect('tnp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tnp  $tnp
     * @return \Illuminate\Http\Response
     */
    public function show($tnp_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tnp  $tnp
     * @return \Illuminate\Http\Response
     */
    public function edit($tnp_id)
    {
         $findtnp = Tnp::find($tnp_id);
		 return view('AdminPanel/edit_tnp',['findtnp' => $findtnp]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tnp  $tnp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$tnp_id)
    {
		$tnp = Tnp::find($tnp_id);
        $tnp->tnp_name = request('tnp_name');
		 if($img=$request->file('file'))
           {
               $x= $img->getClientOriginalExtension();
               $valid=["pdf","docx","xlsx","doc"];
               if(!in_array($x,$valid))
               {
                   dd("Please select proper file");
               }
               else
               {
                $name=time().".".$x;
                $dbpath='document';
                $img->move(public_path($dbpath),$name);
                $tnp->flie=$dbpath."/".$name;
               }
           }
	   	 $tnp->save();
		return redirect('tnp');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tnp  $tnp
     * @return \Illuminate\Http\Response
     */
    public function destroy($tnp_id)
    {
        $tnp = Tnp::find($tnp_id);
		$tnp->delete();
		return redirect('tnp');
    }
}
