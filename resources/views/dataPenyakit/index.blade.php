@extends('layouts.master')
@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Penyakit</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div style="width:100%; text-align:right; margin-bottom:10px;">
                <a href="/dataPenyakit" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#modal-success"><i class="fa fa-plus"></i>
                Tambah Penyakit
                </a>                
              </div>
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Penyakit</th>
                  <th>Solusi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>  
                @foreach ($dataPenyakit as $data)
                      <tr>
                      <th>{{ $loop->iteration}} </th>
                        <th>{{ $data->namaPenyakit }}</th>
                        <th>{{ $data->solusiPenyakit }}</th>
                        <th>
                        <a href="{{url('dataPenyakit/'.$data->id.'/edit')}}" class="btn btn-primary"> <i class="fa fa-edit"></i></a>
                            <form action="{{ url('dataPenyakit/'.$data->id) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger" name="id" value="{{$data->id}}" onClick="return confirm('yakin?')">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>                 
                        </th>
                      </tr>
                @endforeach        
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- POP UP MODEL -->
    <div class="modal fade" id="modal-success">
       <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Penyakit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                  <form method="post" action="/dataPenyakit">
                  {{ csrf_field() }} 
                      <div class="box-body">  
                        <div class="form-group">
                          <label for="namaPenyakit">Nama Penyakit</label>
                          <input type="text" name="namaPenyakit" class="form-control"  placeholder="Masukkan Nama Penyakit">
                        </div>
                        <div class="form-group">
                          <label for="solusiPenyakit">Solusi Penyakit</label>
                          <textarea class="form-control" name="solusiPenyakit" placeholder="Masukkan Solusi Penyakit"></textarea>
                        </div>
                      </div>
                      <div> 
                        <button type="submit" class="btn btn-primary" >Simpan</button>
                      </div>
                  </form>
                </div>
           </div>
          <!-- /.modal-content -->
          </div>
      <!-- /.modal-dialog -->
    </div>

@endsection