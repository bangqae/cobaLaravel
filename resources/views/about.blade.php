@extends('layout.main')

@section('title', 'About')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Hi, I'am {{$nama}}!</h1><!-- with templating engine -->
      <!-- same as below -->
      <!-- <h1 class="mt-3">Hi, I'am <?= $nama?>!</h1> -->
      <!-- same as below -->
      <!-- <h1 class="mt-3">Hi, I'am <?php echo $nama?>!</h1> -->
    </div>
  </div>
</div>
@endsection
