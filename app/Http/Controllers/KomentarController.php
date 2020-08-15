<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KomentarPertanyaan;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
    	$post=KomentarPertanyaan::create([
            'isi_komentar' => $request->komentar_pertanyaan,
            'pertanyaan_id'=> $request->id_per,
            'user_id' => Auth()->User()->id
        ]);
        return redirect('/ownquestion');
    }

    public function jawab(Request $request)
    {
    	$post=KomentarPertanyaan::create([
            'isi_komentar' => $request->komentar_pertanyaan,
            'jawaban_id'=> $request->id_jaw,
            'user_id' => Auth()->User()->id
        ]);
        return view('pertanyaan.show');
    }
}
