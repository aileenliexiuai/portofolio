<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class experienceController extends Controller
{
    private $_tipe;
    
    function __construct(){
        $this->_tipe = 'experience';
    }

    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $data = riwayat::where('tipe',$this->_tipe)->orderBy('enddate', 'desc')->get();
        return view('dashboard.experience.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->info1);
        Session::flash('starteddate', $request->starteddate);
        Session::flash('enddate', $request->enddate);
        Session::flash('isi', $request->isi);

        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'starteddate' => 'required',
            'isi' => 'required',
        ],[
            'judul.required'=> "Judul is required",
            'info1.required'=> "Company name is required",
            'starteddate.required'=> "Started date is required",
            'isi.required'=> "Isi is required"
        ]
    );
    $data =[
        'judul'=>$request->judul,
        'info1'=>$request->info1,
        'tipe'=>$this->_tipe,
        'starteddate'=>$request->starteddate,
        'enddate'=>$request->enddate,
        'isi'=>$request->isi
    ];
    riwayat::create($data);

    return redirect()->route('experience.index')->with('success', 'Experience added successfully');
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
        return view('dashboard.experience.edit')->with('data',$data );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'starteddate' => 'required',
            'isi' => 'required',
        ],[
            'judul.required'=> "Position is required",
            'info1.required'=> "Company name is required",
            'starteddate.required'=> "Started date is required",
            'isi.required'=> "Description is required"
        ]
    );
    $data =[
        'judul'=>$request->judul,
        'info1'=>$request->info1,
        'tipe'=>$this->_tipe,
        'starteddate'=>$request->starteddate,
        'enddate'=>$request->enddate,
        'isi'=>$request->isi
    ];
    riwayat::where('id', $id)->update($data);

    return redirect()->route('experience.index')->with('success', 'data edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        riwayat::where('id', $id)->where('tipe', $this->_tipe)->delete();
        return redirect()->route('experience.index')->with('success', 'Data deleted');    }
}
