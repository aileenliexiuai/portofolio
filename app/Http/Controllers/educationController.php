<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class educationController extends Controller
{
    private $_tipe;
    
    function __construct(){
        $this->_tipe = 'education';
    }

    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $data = riwayat::where('tipe',$this->_tipe)->orderBy('enddate', 'desc')->get();
        return view('dashboard.education.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->info1);
        Session::flash('info2', $request->info2);
        Session::flash('info3', $request->info2);
        Session::flash('starteddate', $request->starteddate);
        Session::flash('enddate', $request->enddate);

        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'info2' => 'required',
            'info3' => 'required',
            'starteddate' => 'required',
        ],[
            'judul.required'=> "School is required",
            'info1.required'=> "Degree is required",
            'info2.required'=> "Field of Study is required",
            'info3.required'=> "Skills is required",
            'starteddate.required'=> "Started date is required",
        ]
    );
    $data =[
        'judul'=>$request->judul,
        'info1'=>$request->info1,
        'info2'=>$request->info2,
        'info3'=>$request->info3,
        'tipe'=>$this->_tipe,
        'starteddate'=>$request->starteddate,
        'enddate'=>$request->enddate,
    ];
    riwayat::create($data);

    return redirect()->route('education.index')->with('success', 'Education added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = riwayat::where('id', $id)->where('tipe', $this->_tipe)->first();
        return view('dashboard.education.edit')->with('data',$data );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'info2' => 'required',
            'info3' => 'required',
            'starteddate' => 'required',
        ],[
            'judul.required'=> "School is required",
            'info1.required'=> "Degree is required",
            'info2.required'=> "Field of Study is required",
            'info3.required'=> "Skills is required",
            'starteddate.required'=> "Started date is required",
        ]
    );

    $data =[
        'judul'=>$request->judul,
        'info1'=>$request->info1,
        'info2'=>$request->info2,
        'info3'=>$request->info3,
        'tipe'=>$this->_tipe,
        'starteddate'=>$request->starteddate,
        'enddate'=>$request->enddate,
    ];
    riwayat::where('id', $id)->update($data);

    return redirect()->route('education.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        riwayat::where('id', $id)->where('tipe', $this->_tipe)->delete();
        return redirect()->route('education.index')->with('success', 'Data deleted');    }
}
