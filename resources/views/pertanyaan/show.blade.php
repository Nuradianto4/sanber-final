@extends('layouts/user/master')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Detail Pertanyaan Yang Dibuat</h3>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
        </div>
    </div>
    <div class="panel-body">
        <h3>Pertanyaan</h3>
        <div class="jumbotron">
            <div >
                <h3 class="title">{{$pertanyaan->author->name }}</h3>
                <span class="date">{{$pertanyaan->created_at}}</span>
            </div>
            <h3 class="display-5">{{ $pertanyaan->judul }}</h3>
            <p class="lead">{{ $pertanyaan->isi_pertanyaan }}</p>
            <p class="lead">
                @foreach($pertanyaan->tags as $tag)
                <a href="#" class="btn btn-info btn-xs">{{$tag->name}}</a>
                @endforeach
            </p>
            <p>
                <i class="lnr lnr lnr-thumbs-up mx-3"><span class="label label-success"> 0</span></i>
                <i class="lnr lnr lnr-thumbs-down mx-3"><span class="label label-danger"> 0</span></i>
            </p>
            <hr class="my-4">
            <form role="form" action="/komentar_pertanyaan" method="POST">
            @csrf
                <div class="input-group">
                 <input class="form-control" placeholder="Komentari Pertanyaan ini" name="komentar_pertanyaan" type="text">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Gas!</button>
                    </span>
                </div><br>
            </form>
            <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
            <label>Nama</label>
            <i class="fa fa-check-circle">  </i> Komentar Cerita Nya
        </div>
        </div>
    </div>
    <div class="panel-footer">
        <h3>Jawaban</h3>
        <div class="jumbotron jumbotron-fluid">
                <div >
                    <h3 class="title">Nama</h3>
                    <span class="date">waktu</span>
                </div><br>
                <p class="lead">Jawaban</p>
        </div>
        <i class="lnr lnr lnr-thumbs-up mx-3"><span class="label label-success"> 0</span></i>
        <i class="lnr lnr lnr-thumbs-down mx-3"><span class="label label-danger"> 0</span></i>
        <br><br>
        <div class="input-group">
            <input class="form-control" placeholder="Komentari Jawaban ini" name="komentar_jawaban" type="text">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Gas!</button>
            </span>
            </div><br>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
            <label>Nama</label>
            <i class="fa fa-check-circle">  </i> Komentar Cerita Nya
        </div>
        <div class="row">
            <div class="col-md-6"><span class="panel-note"></span></div>
            <div class="col-md-6 text-right"><a href="{{ route('ownquestion.index') }}"
                    class="btn btn-sm btn-primary">Back</a></div>
        </div>
    </div>
</div>
@endsection
