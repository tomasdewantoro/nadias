@extends('layouts.master')
@section('content')

<div class="card-body">
  <table id="example1" class="table table-bordered table-striped">
    <h4 style="text-align:center" class="modal-title">Edit Data Nama Gejala</h4>
      <form method="post" action="/dataGejala/{{$dataGejala->id}}/edit">
        {{ csrf_field() }} 
          <div class="box-body">  
            <div class="form-group">
              <label for="namaGejala">Nama Gejala</label>
              <input type="text" name="namaGejala" class="form-control"  placeholder="Masukkan Nama Gejala" value="{{$dataGejala->namaGejala}}">
            </div>
          </div>
          <div> 
            <button type="submit" class="btn btn-primary" >Simpan</button>
          </div>
      </form>
  </table>
</div>
@endsection