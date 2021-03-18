@extends('layouts.master')
@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Gejala</h1>
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
                <a href="/dataGejala" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#modal-success"><i class="fa fa-plus"></i>
                Tambah Gejala
                </a>
            </div>
            @if (session('status'))
            <div id="alertbro" class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Gejala</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>  
                @foreach ($dataGejala as $data)
                      <tr>
                      <th>{{ $loop->iteration}} </th>
                        <th>{{ $data->namaGejala }}</th>
                        <th>
                          <a href="{{url('dataGejala/'.$data->id.'/edit')}}" class="btn btn-primary"> <i class="fa fa-edit"></i></a>
                          <form action="{{ url('dataGejala/'.$data->id) }}" method="POST" class="d-inline">
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
              <h4 class="modal-title">Data Gejala</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                  <form method="post" action="/dataGejala">
                  {{ csrf_field() }} 
                      <div class="box-body">  
                        <div class="form-group">
                          <label for="namaGejala">Nama Gejala</label>
                          <input type="text" name="namaGejala" class="form-control"  placeholder="Masukkan Nama Penyakit">
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