@extends('backend.layouts.template')

@section('title')
    <title>Dashboard - Edit Data User</title>
@endsection

@section('actdash')
  <a class="nav-link collapsed" href="{{ route('index') }}">
@endsection

@section('actcar')
 <a class="nav-link collapsed" href="{{ route('carousel.index') }}">
@endsection

@section('actdata')
 <a class="nav-link collapsed" href="{{ route('data.index') }}">
@endsection

@section('actevent')
 <a class="nav-link collapsed" href="{{ route('event.index') }}">
@endsection

@section('actkontak')
 <a class="nav-link collapsed" href="{{ route('kontak.index') }}">
@endsection

@section('actmatpel')
    <a class="nav-link collapsed" href="{{ route('jabatan.index') }}">
@endsection

@section('actpegawai')
 <a class="nav-link collapsed" href="{{ route('pegawai.index') }}">
@endsection

@section('actsarana')
 <a class="nav-link collapsed" href="{{ route('sarana.index') }}">
@endsection

@section('actuser')
 <a class="nav-link " href="{{ route('user.index') }}">
@endsection

@section('actprofil')
    <a class="nav-link collapsed" href="{{ route('cms.index') }}">
@endsection

@section('dashboard')

  <div class="pagetitle">
    <h1>Data User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
        <li class="breadcrumb-item active">Edit User</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Edit Data</h5>

          <!-- Vertical Form -->
          <form method="POST" action="{{route('user.update',$user->id)}}" class="row g-3" >
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ isset($user) ? $user->id : '' }}">
            <div class="col-10">
              <label for="inputNanme4" class="form-label">Nama</label>
              <input type="text" class="form-control" id="inputNanme4" name="name" value="{{ isset($user) ? $user->name : '' }}" required>
            </div>
            <input type="hidden" name="role" value="admin">
            <div class="col-md-4">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ isset($user) ? $user->email : '' }}" required>
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4" name="password" value="" required>
            </div>
            <div class="left-text">
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
  </section>

@endsection
