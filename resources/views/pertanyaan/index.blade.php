@extends('layouts/user/master')
@section('content')
<div class="mt-3 ml-3 ">
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    @if (session('success'))
                    <div class="alert alert-success">
                {{session('success')}}
                    </div>
                @endif
                <div class="row">
            <div class="col-md-6"><a class="btn btn-danger" href="#" style="margin-bottom: 1.25rem;">Buat Pertanyaan Baru</a>
            <a class="btn btn-danger" href="#" style="margin-bottom: 1.25rem;">Lihat Pertanyaan Masuk</a></div>
          </div>
                
              
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Tanggal_buat</th>
                      <th>Tanggal_update</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td>#</td>
                        <td style="display: flex;">
                            <a href="#" class="btn btn-info btn-sm">show</a>
                            <a href="#" class="btn btn-default btn-sm">edit</a>
                            <form action="#" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    
                    
                    
                  </tbody>
                </table>

              </div>
              
              <!-- /.card-body -->
       </div>
        </div>
@endsection
