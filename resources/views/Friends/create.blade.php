@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<form action="/friends" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') }}">
    @error('nama')
      <div class="alert alert-danger">{{ $message }} </div>
    @enderror

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Telpon</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{ old('no_tlp') }}">
  </div>
  @error('no_tlp')
    <div class="alert alert-danger">{{ $message }} </div>
  @enderror

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') }}">
  </div>
  @error('alamat')
    <div class="alert alert-danger">{{ $message }} </div>
  @enderror

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" name="jenis_kelamin" id="exampleInputPassword1" value="{{ old('jenis_kelamin') }}">
  </div>
  @error('jenis_kelamin')
    <div class="alert alert-danger">{{ $message }} </div>
  @enderror

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Instagram</label>
    <input type="text" class="form-control" name="instagram" id="exampleInputPassword1" value="{{ old('instagram') }}">
  </div>
  @error('instagram')
    <div class="alert alert-danger">{{ $message }} </div>
  @enderror
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

   
@endsection