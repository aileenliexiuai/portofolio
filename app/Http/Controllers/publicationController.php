<?php

namespace App\Http\Controllers;

use App\Models\riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class publicationController extends Controller
{
    private $_tipe;
    
    function __construct(){
        $this->_tipe = 'publication';
    }

    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $data = riwayat::where('tipe',$this->_tipe)->orderBy('enddate', 'desc')->get();
        return view('dashboard.publication.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.publication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('info1', $request->info1);
        Session::flash('info2', $request->info2);
        Session::flash('starteddate', $request->starteddate);


        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'info2' => 'required',
            'starteddate' => 'required',
        ],[
            'judul.required'=> "Title is required",
            'info1.required'=> "Publication/Publisher is required",
            'info2.required'=> "Publication URL is required",
            'starteddate.required'=> "Publication date is required",
        ]
    );
    $data =[
        'judul'=>$request->judul,
        'info1'=>$request->info1,
        'info2'=>$request->info2,
        'tipe'=>$this->_tipe,
        'starteddate'=>$request->starteddate,
    ];
    riwayat::create($data);

    return redirect()->route('publication.index')->with('success', 'Publication added successfully');
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
        return view('dashboard.publication.edit')->with('data',$data );
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
            'starteddate' => 'required',
        ],[
            'judul.required'=> "Title is required",
            'info1.required'=> "Publication/Publisher is required",
            'info2.required'=> "Publication URL is required",
            'starteddate.required'=> "Publication date is required",
        ]
    );

    $data =[
        'judul'=>$request->judul,
        'info1'=>$request->info1,
        'info2'=>$request->info2,
        'tipe'=>$this->_tipe,
        'starteddate'=>$request->starteddate,
    ];
    riwayat::where('id', $id)->update($data);

    return redirect()->route('publication.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        riwayat::where('id', $id)->where('tipe', $this->_tipe)->delete();
        return redirect()->route('publication.index')->with('success', 'Data deleted');    }
}
