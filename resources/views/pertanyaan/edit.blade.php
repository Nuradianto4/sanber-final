@extends('layouts/user/master')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Perbaharui Pertanyaan</h3>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
        </div>
    </div>
    <div class="panel-body">
        <form role="form" action="{{ url('/ownquestion/'.$pertanyaan->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="judul">Title</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Title" value="{{ $pertanyaan->judul }}">
                @error('judul')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" name="isi_pertanyaan" placeholder="Buat Pertanyaan" value="{{ $pertanyaan->isi_pertanyaan }}">
                @error('isi_pertanyaan')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="tags" name="tags" value="{{ $pertanyaan->tag }}" placeholder="Pisahkan tag dengan , (koma) tanpa spasi">
                    @error('tags')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</div>
@endsection
