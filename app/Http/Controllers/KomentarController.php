<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KomentarPertanyaan;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function store()
    {
    	$post=KomentarPertanyaan::create([
            'isi_komentar' => $request->komentar_pertanyaan,
            'pertanyaan_id'=> KomentarPertanyaan()->id,
            'user_id' => Auth()->User()->id
        ]);
        return redirect(route('pertanyaan.show'))->with('status', 'Pertanyaan Berhasil Dibuat');
    }
}
