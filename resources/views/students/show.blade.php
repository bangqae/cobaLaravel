@extends('layout.main')

@section('title', 'Details')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <h1 class="mt-3">Student Details</h1>

      <div class="">
        <div class="card" style="">
          <div class="card-body">
            <h5 class="card-title">{{ $student->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
            <p class="card-text">{{ $student->email }}</p>
            <p class="card-text">{{ $student->jurusan }}</p>
            
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href={{ url("/students") }} class="card-link">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
