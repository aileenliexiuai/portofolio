<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\halaman;
use App\Models\riwayat;
use Illuminate\Http\Request;

class depanController extends Controller
{
    public function index(){

        $about_id = get_meta_value('_halamanabout');
        $about_data = halaman::where('id',$about_id)->first();
        
        $interest_id = get_meta_value('_halamaninterest');
        $interest_data = halaman::where('id',$interest_id)->first();
        
        $awards_id = get_meta_value('_halamanawards');
        $awards_data = halaman::where('id',$awards_id)->first();
        
        $experience_data = riwayat::where('tipe', 'experience')->get();
        $education_data = riwayat::where('tipe', 'education')->get();
        $publication_data = riwayat::where('tipe', 'publication')->get();

       

        $galleries_data = Gallery::all();


        return view('depan.index')->with([
            'about' => $about_data,
            'interest'=>$interest_data,
            'awards'=>$awards_data,
            'experience'=>$experience_data,
            'education'=>$education_data,
            'publication'=>$publication_data,
            'galleries' => $galleries_data
        ]);
    }
}
