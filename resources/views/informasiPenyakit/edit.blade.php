@extends('layouts.master')
@section('content')
<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <h4 style="text-align:center" class="modal-title">Edit Data Informasi Penyakit</h4>
      <form method="post" action="/informasiPenyakit/{{$informasiPenyakit->id}}/edit">
        {{ csrf_field() }} 
          <div class="box-body">  
            <div class="form-group">
              <label for="namaPenyakit">Nama Penyakit</label>
              <input type="text" name="namaPenyakit" class="form-control"  placeholder="Masukkan Nama Penyakit" value="{{$informasiPenyakit->namaPenyakit}}">
            </div>
            <div class="form-group">
              <label for="definisiPenyakit">Definisi Penyakit</label>
              <textarea class="form-control" name="definisiPenyakit" placeholder="Masukkan Definisi Penyakit"> {{$informasiPenyakit->definisiPenyakit}} </textarea>
            </div>
            <div class="form-group">
              <label for="solusiPenyakit">Solusi Penyakit</label>
              <textarea class="form-control" name="solusiPenyakit" placeholder="Masukkan Solusi Penyakit"> {{$informasiPenyakit->solusiPenyakit}} </textarea>
            </div>
          </div>
          <div> 
            <button type="submit" class="btn btn-primary" >Simpan</button>
          </div>
      </form>
  </table>
</div>
@endsection