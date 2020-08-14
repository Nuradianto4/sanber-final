<?php

namespace App\Http\Controllers;

use App\Model\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = Pertanyaan::orderBy('id', 'desc')->paginate(10);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi_pertanyaan' => 'required'
        ]);

        Pertanyaan::create([
            'judul' => $request->judul,
            'isi_pertanyaan' => $request->isi_pertanyaan,
            'user_id' => Auth()->User()->id
        ]);
        return redirect(route('ownquestion.index'))->with('status', 'Pertanyaan Berhasil Dibuat');
    }

    public function show($id)
    {
        $pertanyaan = Pertanyaan::where('id', $id)->first();
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::where('id',$id)->first();
        return view('pertanyaan.edit',compact('pertanyaan'));
    }

    public function update(Request $request, $id)
    {
        Pertanyaan::where('id', $id)->update([
            'judul' => $request->judul,
            'isi_pertanyaan' => $request->isi_pertanyaan
        ]);
        return redirect(route('ownquestion.index'))->with('status', 'Pertanyaan Berhasil Diperbaharui');
    }

    public function destroy($id)
    {
        Pertanyaan::destroy($id);
        return redirect(route('ownquestion.index'))->with('status', 'Pertanyaan Berhasil Dihapus');
    }
}
