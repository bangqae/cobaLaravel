@extends('layout.main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <h1 class="mt-3">Students</h1>

      <a href={{ url("/students/create") }} class="btn btn-primary my-3">Tambah Data</a>

      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }} {{-- status dari controller --}}
      </div>
      @endif

      <div class="">
        <ul class="list-group">
          {{-- loop untuk menampilkan seluruh isi array of object students dari StudentsController --}}
          @foreach ($students as $student)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $student->nama }}, {{ $student->jurusan }}
            {{-- <a href="/students/{{ $student->id }}" class="badge badge-info">detail</a> --}}
            <a href={{ url("/students/{$student->id}") }} class="badge badge-info">detail</a>
          </li>
          @endforeach
          {{-- akhir loop students --}}
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
