@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ms-3 border-bottom">
        <h1 class="h2">Tambah Data Penduduk</h1>
    </div>

    <div class="col-lg-8 ms-3">
        <form action="/dataPenduduk" method="post">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
              @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nkk" class="form-label">NKK</label>
              <input type="text" class="form-control @error('nkk') is-invalid @enderror" id="nkk" name="nkk" required value="{{ old('nkk') }}">
              @error('nkk')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik') }}">
              @error('nik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tempatLahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempatLahir') is-invalid @enderror" id="tempatLahir" name="tempatLahir" required value="{{ old('tempatLahir') }}">
              @error('tempatLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tanggalLahir') is-invalid @enderror" id="tanggalLahir" name="tanggalLahir" required value="{{ old('tanggalLahir') }}">
              @error('tanggalLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="agama" class="form-label">Agama</label>
              <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" required value="{{ old('agama') }}">
              @error('agama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="statusKawin" class="form-label">Status Kawin</label>
              {{-- <input type="text" class="form-control @error('statusKawin') is-invalid @enderror" id="statusKawin" name="statusKawin" required value="{{ old('statusKawin') }}"> --}}
              <select name="statusKawin" id="statusKawin" class="form-select @error('statusKawin') is-invalid @enderror">
                <option value="" selected>Pilih</option>
                <option value="B">Belum</option>
                <option value="S">Sudah</option>
                <option value="P">Pernah</option>
              </select>
              @error('statusKawin')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="kelamin" class="form-label">Jenis Kelamin</label>
              {{-- <input type="text" class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin" required value="{{ old('kelamin') }}"> --}}
              <select name="kelamin" id="kelamin" class="form-select @error('kelamin') is-invalid @enderror" required>
                <option value="" selected>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
              </select>
              @error('kelamin')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat') }}">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="rt" class="form-label">RT</label>
              <input type="text" class="form-control @error('rt') is-invalid @enderror" id="rt" name="rt" required value="{{ old('rt') }}">
              @error('rt')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="rw" class="form-label">RW</label>
              <input type="text" class="form-control @error('rw') is-invalid @enderror" id="rw" name="rw" required value="{{ old('rw') }}">
              @error('rw')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="ektp" class="form-label">ektp</label>
              {{-- <input type="text" class="form-control @error('ektp') is-invalid @enderror" id="ektp" name="ektp" readonly required value="{{ old('ektp') }}"> --}}
              <select name="ektp" id="ektp" class="form-select @error('ektp') is-invalid @enderror" required>
                <option value="" selected>Pilih</option>
                <option value="s">Sudah</option>
                <option value="b">Belum</option>
              </select>
              @error('ektp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary mb-5">Tambah Data Penduduk</button>
          </form>
    </div>
    
@endsection