@extends('layout.main')

@section('title', 'Edit Data')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-8">
      <h1 class="mt-3">Edit Data</h1>

      <div class="">
        <form method="post" action={{ url("/students/{$student->id}") }}>
          @method('patch')
          @csrf {{-- token csfr --}}
          <input type="hidden" name="id" value="{{ $student->id }}"> {{-- id untuk validasi model update --}}
          <div class="form-group">
            <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ $student->nrp }}">
            @error('nrp') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
            @error('jurusan') <div class="invalid-feedback">{{ $message }}</div> @enderror
          </div>
          
          <button type="submit" class="btn btn-primary">Edit Data</button>
          <a href={{ url("/students") }} class="btn btn-danger">Back</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
