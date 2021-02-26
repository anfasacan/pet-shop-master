@extends('layouts.admin.app')
@section('content')

@if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
  	
  @endif

  <form action="{{ route('tester.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label>Nama Produk</label>
      <input type="text" class="form-control" name="nama">
  </div>
  
  <div class="form-group">
      <label>Harga</label>
      <input type="text" class="form-control" name="harga">
  </div>

  <div class="form-group">
      <label>Merk</label>
      <br>
      <select  class="form-control" name="merk_id">
        <option value="99" class="form-control" name="merk_id" ></option>
        <option value="1" class="form-control" name="merk_id">Whiskas</option>
        <option value="2" class="form-control" name="merk_id" >Bold</option>
        <option value="3" class="form-control" name="merk_id" >Equilibrio</option>
        <option value="4" class="form-control" name="merk_id" >Friskies</option>
        <option value="5" class="form-control" name="merk_id" >Me-O</option>
        <option value="6" class="form-control" name="merk_id" >Royal Canin</option>
      </select>
      {{-- <input type="number" class="form-control" name="merk_id"> --}}
  </div>

  <div class="form-group">
      <label>is ready</label>
      <br>
      <select  class="form-control" name="is_ready">
        <option value="1" class="form-control" name="is_ready">Yes</option>
        <option value="0" class="form-control" name="is_ready" >No</option>
      </select>
      {{-- <input type="number" class="form-control" name="is_ready"> --}}
  </div>

  <div class="form-group">
      <label>jenis</label>
      <input type="text" class="form-control" name="jenis">
  </div>

  <div class="form-group">
      <label>berat</label>
      <input type="text" class="form-control" name="berat">
  </div>
  
  <div class="form-group">
      <label>Thumbnail</label>
      <input type="file" name="gambar" class="form-control">
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan Post</button>
  </div>

  </form>


@endsection