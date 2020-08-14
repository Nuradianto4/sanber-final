<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index() {
    	//$pertanyaan = DB::table('pertanyaan')->get(); // select * from pertanyaan
    	//dd($pertanyaan);
    	//$pertanyaan = Pertanyaan::all();
        //dd($pertanyaan);
        return view('pertanyaan.index');
    }

    public function create() {
    	return view('pertanyaan.create');
    }

    public function store(Request $request) {

        $pertanyaan = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi_pertanyaan" => $request["isi"],
            //"profil_id" => Auth::id()
        ]);

    	return redirect('/pertanyaan');
    }

    public function new() {
    	return view('pertanyaan.new');
    }

    public function show() {
    	return view('pertanyaan.show');
    }
}
