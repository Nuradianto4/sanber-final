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
            <h3 class="display-4">{{ $pertanyaan->judul }}</h3>
            <p class="lead">{{ $pertanyaan->isi_pertanyaan }}</p>
            <p class="lead">
                @foreach($pertanyaan->tags as $tag)
                <span class="btn btn-info btn-xs">{{$tag->name}}</span>
                @endforeach
            </p>
            <hr class="my-4">
            <p>
                <i class="lnr lnr lnr-thumbs-up mx-3"><span class="label label-success"> 0</span></i>
                <i class="lnr lnr lnr-thumbs-down mx-3"><span class="label label-danger"> 0</span></i>
            </p>
            
        </div>
    </div>
    <div class="panel-footer">
        <h3>Jawaban</h3>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <p class="lead">;i;oi</p>
            </div>
        </div>
        <i class="lnr lnr lnr-thumbs-up mx-3"><span class="label label-success"> 0</span></i>
        <i class="lnr lnr lnr-thumbs-down mx-3"><span class="label label-danger"> 0</span></i>
        <br><br>
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
            <i class="fa fa-info-circle"></i> Komentar Cerita Nya
        </div>
        <div class="row">
            <div class="col-md-6"><span class="panel-note"></span></div>
            <div class="col-md-6 text-right"><a href="{{ route('ownquestion.index') }}"
                    class="btn btn-sm btn-primary">Back</a></div>
        </div>
    </div>
</div>
@endsection
