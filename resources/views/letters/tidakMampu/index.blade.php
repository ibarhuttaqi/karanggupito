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
      <form action="/surat/tidakmampu" method="GET">
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
  
  <a href="/surat/tidakmampu/create" class="btn btn-primary">Buat Surat Tidak Mampu</a>

  @if ($tidakmampu->count())

    <table class="table table-responsive small col-sm-10 table-striped mt-2 ms-0">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tipe Surat</th>
          <th scope="col">Nomor Surat</th>
          <th scope="col">Tanggal Surat</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">NIK</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Pekerjaan</th>
          <th scope="col">Sekolah</th>
          <th scope="col">Alamat</th>
          <th scope="col">Nama Ayah</th>
          <th scope="col">NIK Ayah</th>
          <th scope="col">Tempat Lahir Ayah</th>
          <th scope="col">Tanggal Lahir Ayah</th>
          <th scope="col">Pekerjaan Ayah</th>
          <th scope="col">Alamat Ayah</th>
          <th scope="col">Nama Ibu</th>
          <th scope="col">NIK Ibu</th>
          <th scope="col">Tempat Lahir Ibu</th>
          <th scope="col">Tanggal Lahir Ibu</th>
          <th scope="col">Pekerjaan Ibu</th>
          <th scope="col">Alamat Ibu</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($tidakmampu as $data)
              <tr>
                  <th scope="row"> {{ $loop->iteration }}</th>
                  <td>{{ $data['tipeSurat'] }}</td>
                  <td>{{ $data['nomorSurat'] }}</td>
                  <td>{{ $data['tanggalSurat'] }}</td>
                  <td>{{ $data['nama'] }}</td>
                  <td>{{ $data['nik'] }}</td>
                  <td>{{ $data['tempatLahir'] }}</td>
                  <td>{{ $data['tanggalLahir'] }}</td>
                  <td>{{ $data['kelamin'] }}</td>
                  <td>{{ $data['pekerjaan'] }}</td>
                  <td>{{ $data['sekolah'] }}</td>
                  <td>{{ $data['alamat'] }}</td>
                  <td>{{ $data['namaAyah'] }}</td>
                  <td>{{ $data['nikAyah'] }}</td>
                  <td>{{ $data['tempatLahirAyah'] }}</td>
                  <td>{{ $data['tanggalLahirAyah'] }}</td>
                  <td>{{ $data['pekerjaanAyah'] }}</td>
                  <td>{{ $data['alamatAyah'] }}</td>
                  <td>{{ $data['namaIbu'] }}</td>
                  <td>{{ $data['nikIbu'] }}</td>
                  <td>{{ $data['tempatLahirIbu'] }}</td>
                  <td>{{ $data['tanggalLahirIbu'] }}</td>
                  <td>{{ $data['pekerjaanIbu'] }}</td>
                  <td>{{ $data['alamatIbu'] }}</td>
                  <td>
                    <a href="/surat/tidakmampu/{{ $data->id }}" class="badge bg-info" target="_blank"><i class="bi bi-printer"></i></a>
                    <a href="/surat/tidakmampu/{{ $data->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                    <form action="/surat/tidakmampu/{{ $data->id }}" method="POST" class="d-inline">
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
  
  <br><br><br><br><br><br>

  <div class="d-flex justify-content-center mt-5">
    {{ $tidakmampu->links() }}
  </div>

  @endsection