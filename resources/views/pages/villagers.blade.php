@extends('layouts.main')

@section('container')

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-15" role="alert">
      {{ session('success') }}
    </div> 
  @endif

  <h1 class="text-center mb-5">Welcome | {{ $title }}</h1>
  
  <div class="row justify-content-center">
    <div class="col-md-6 mb-1">
      <form action="/dataPenduduk" method="GET">
        {{-- @if (request('category')) 
        <input type="hidden" name='category' value="{{ request('category') }}">
        @endif
        @if (request('author')) 
        <input type="hidden" name='author' value="{{ request('author') }}">
        @endif --}}
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
          <button class="btn btn-outline-primary btn-secondary text-white" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
  
  <a href="/dataPenduduk/create" class="btn btn-primary">Tambah Data Penduduk</a>

  @if ($villagers->count())

    <table class="table table-responsive small col-lg-10 table-striped mt-2">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NKK</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Agama</th>
          <th scope="col">Status Kawin</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">RT</th>
          <th scope="col">RW</th>
          <th scope="col">eKTP</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($villagers as $villager)
              <tr>
                  <th scope="row"> {{ $loop->iteration }}</th>
                  <td>{{ $villager['nkk'] }}</td>
                  <td>{{ $villager['nik'] }}</td>
                  <td>{{ $villager['nama'] }}</td>
                  <td>{{ $villager['tempatLahir'] }}</td>
                  <td>{{ $villager['tanggalLahir'] }}</td>
                  <td>{{ $villager['agama'] }}</td>
                  <td>{{ $villager['statusKawin'] }}</td>
                  <td>{{ $villager['kelamin'] }}</td>
                  <td>{{ $villager['alamat'] }}</td>
                  <td>{{ $villager['rt'] }}</td>
                  <td>{{ $villager['rw'] }}</td>
                  <td>{{ $villager['ektp'] }}</td>
                  <td>
                    <a href="/dataPenduduk/{{ $villager->nik }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                    <a href="/dataPenduduk/{{ $villager->nik }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                    <form action="/dataPenduduk/{{ $villager->nik }}" method="POST" class="d-inline">
                      @method('DELETE')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('yakinnn ???')"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
              </tr>        
          @endforeach
      </tbody>
    </table>

  @else
      <p class="text-center fs-4">Data Tidak Ditemukan</p>
  @endif
  
<div class="d-flex justify-content-center mt-5">
  {{ $villagers->links() }}
</div>

  @endsection