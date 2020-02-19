@extends('layout.main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <h1 class="mt-3">Students</h1>

      <div class="">
        <ul class="list-group">
          {{-- loop untuk menampilkan seluruh isi array of object students dari StudentsController --}}
          @foreach ($students as $student)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $student->nama }}
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