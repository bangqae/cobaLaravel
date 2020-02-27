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
            
            <a href={{ url("students/{$student->id}/edit") }} class="btn btn-primary">Edit</a>
            {{-- "{{ $student->id }}/edit" --}}
            <form action="{{ $student->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button onclick="return confirm('Apakah ingin menghapus data ini ?')" type="submit" class="btn btn-danger">Delete</button>
              {{-- <button onclick="" type="submit" class="btn btn-danger"> Delete </button> --}}
              {{-- <script>
                function konfimasi() {
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.value) {
                      Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                    }
                  })
                }
              </script> --}}
            </form>
            <a href={{ url("/students") }} class="card-link">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
