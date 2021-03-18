@extends('layouts.master')
@section('content')

<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <h4 style="text-align:center" class="modal-title">Edit Data Nama Penyakit</h4>
      <form method="post" action="/dataPenyakit">
        {{ csrf_field() }} 
          <div class="box-body">  
            <div class="form-group">
              <label for="namaPenyakit">Nama Penyakit</label>
              <input type="text" name="namaPenyakit" class="form-control"  placeholder="Masukkan Nama Penyakit" value="{{$dataPenyakit->namaPenyakit}}">
            </div>
            <div class="form-group">
                <label for="solusiPenyakit">Solusi Penyakit</label>
                <input type="text" name="solusiPenyakit" class="form-control"  placeholder="Masukkan Solusi Penyakit" value="{{$dataPenyakit->solusiPenyakit}}">
              </div>
          </div>
          <div> 
            <button type="submit" class="btn btn-primary" >Simpan</button>
          </div>
      </form>
  </table>
</div>
@endsection