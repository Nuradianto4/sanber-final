@extends('layouts/user/master')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Pertanyaan Yang Dibuat</h3>
        <div class="right">
            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            <a href="{{ route('ownquestion.create') }}" class="btn-toggle-minified"><i
                    class="lnr lnr-plus-circle"></i></a>
        </div>
    </div>
    <div class="panel-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul Pertanyaan</th>
                    <th>Isi Pertanyaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pertanyaan as $pr)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pr->judul }}</td>
                    <td>{{ $pr->isi_pertanyaan }}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ url('/ownquestion/'.$pr->id) }}" class="btn btn-sm btn-info">Show</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ url('/ownquestion/'.$pr->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ url('/ownquestion/'.$pr->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center">Belum Ada Pertanyaan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-6"><span class="panel-note"></span></div>
            <div class="col-md-6 text-right"></div>
        </div>
    </div>
</div>
@endsection
