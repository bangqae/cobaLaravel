@extends('layout.main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Mahasiswa</h1>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NRP</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Kai</td>
            <td>175610119</td>
            <td>bangqae.16@gmail.com</td>
            <td>SI</td>
            <td>
              <a href="" class="badge badge-success">edit</a>
              <a href="" class="badge badge-danger">delete</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Kuy</td>
            <td>175610116</td>
            <td>bangquy.16@gmail.com</td>
            <td>SI</td>
            <td></td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>
@endsection