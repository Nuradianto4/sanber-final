@extends('layouts/user/master')
@section('content')
<div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Pertanyaan masuk</h3>
          <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
          </div>
        </div>
        <div class="panel-body">
          <p>Pertanyaan User lain</p>
        </div>
        <div class="panel-footer">
          <a class="btn btn-danger" href="#" style="margin-bottom: 1.25rem;">Jawab</a>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Jawaban</h3>
          <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
          </div>
        </div>
        <div class="panel-body">
          <p>Isi jawaban dari pertanyaan diatas, akan tampil ketika button jawab ditekan</p>
        </div>

@endsection