<?php

namespace App\Http\Controllers;

use App\Model\Jawaban;
use Illuminate\Http\Request;
use App\Model\Pertanyaan;

class JawabanController extends Controller
{
    public function index()
    {
        $jawaban = Jawaban::orderBy('id', 'desc')->paginate(10);
        return view('jawaban.index', compact('jawaban'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $pertanyaan = Pertanyaan::findOrFail($id);

        request()->validate([
            'content' => 'required',
        ]);

        $jawaban = new Jawaban;
        $jawaban->pertanyaan_id = $pertanyaan->id;
        $jawaban->user_id = auth()->user()->id;
        $jawaban->content = request('content');
        $jawaban->save();

        return redirect(route('ownquestion.index'))->with('success', 'Jawaban telah tersimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function upvote($id)
    {
        $jawaban = Jawaban::findOrFail($id);
        $jawaban->upvote();

        return redirect()->back();
    }

    public function downvote($id)
    {
        $jawaban = Jawaban::findOrFail($id);

        $user = auth()->user();
        $isAllowedToDownvote = $user->isAllowedToDownvote();
        if (!$isAllowedToDownvote) {
            return redirect()->back();
        }

        $answer->downvote();
        return redirect()->back();
    }

    public function setAsBestAnswer($id)
    {
        $jawaban = Jawaban::findOrFail($id);
        $user = auth()->user();

        $pertanyaan = $jawaban->pertanyaan;
        if (!$question->isOwnedByUser($user->id)) {
            return redirect()->back();
        }

        $jawaban->setAsBestAnswer();
        session()->flash('success', 'Jawaban terbaik');
        return redirect()->back();
    }

    public function storeComment($id)
    {
        $jawaban = Jawaban::findOrFail($id);

        request()->validate([
            'content' => 'required',
        ]);

        $user = auth()->user();
        $jawaban->addComment([
            'user_id' => $user->id,
            'isi_komentar' => request('isi_komentar')
        ]);

        session()->flash('success', 'Komentar telah ditambahkan');
        return redirect()->back();
    }
}
