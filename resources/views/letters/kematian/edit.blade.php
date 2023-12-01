@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ms-4">Surat Kematian</h1>
    </div>

    <div class="col-lg-8 ms-4">
        <form action="/surat/kematian/{{ $kematian->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomorSurat" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control @error('nomorSurat') is-invalid @enderror" id="nomorSurat" name="nomorSurat" required autofocus value="{{ old('nomorSurat', $kematian->nomorSurat) }}">
                @error('nomorSurat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $kematian->nama) }}">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="tempatLahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempatLahir') is-invalid @enderror" id="tempatLahir" name="tempatLahir" required value="{{ old('tempatLahir', $kematian->tempatLahir) }}">
              @error('tempatLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tanggalLahir') is-invalid @enderror" id="tanggalLahir" name="tanggalLahir" required value="{{ old('tanggalLahir', $kematian->tanggalLahir) }}">
              @error('tanggalLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="kelamin" class="form-label">Jenis Kelamin</label>
              {{-- <input type="text" class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin" required value="{{ old('kelamin') }}"> --}}
              <select name="kelamin" id="kelamin" class="form-select @error('kelamin') is-invalid @enderror" required value="{{ old('kelamin', $kematian->kelamin) }}">
                
                  @if(old('kelamin', $kematian->kelamin) == 'L')
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L" selected>Laki-laki</option>
                    <option value="P">Perempuan</option>
                  @elseif(old('kelamin', $kematian->kelamin) == 'P')
                  <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P" selected>Perempuan</option>
                  @else
                    <option value="" selected>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  @endif
              </select>
              @error('kelamin')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="hariMeninggal" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat', $kematian->alamat) }}">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>    

              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>
              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>
              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>
            
              <div class="mb-3">
                <label for="hariMeninggal" class="form-label">Hari Meninggal</label>
                <input type="text" class="form-control @error('hariMeninggal') is-invalid @enderror" id="hariMeninggal" name="hariMeninggal" required value="{{ old('hariMeninggal', $kematian->hariMeninggal) }}">
                @error('hariMeninggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>    
              <div class="mb-3">
                <label for="tanggalMeninggal" class="form-label">Tanggal Meninggal</label>
                <input type="date" class="form-control @error('tanggalMeninggal') is-invalid @enderror" id="tanggalMeninggal" name="tanggalMeninggal" required value="{{ old('tanggalMeninggal', $kematian->tanggalMeninggal) }}">
                @error('tanggalMeninggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="tempatMeninggal" class="form-label">Tempat Meninggal</label>
                <input type="text" class="form-control @error('tempatMeninggal') is-invalid @enderror" id="tempatMeninggal" name="tempatMeninggal" required value="{{ old('tempatMeninggal', $kematian->tempatMeninggal) }}">
                @error('tempatMeninggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="sebabKematian" class="form-label">Sebab Kematian</label>
                <input type="text" class="form-control @error('sebabKematian') is-invalid @enderror" id="sebabKematian" name="sebabKematian" required value="{{ old('sebabKematian', $kematian->sebabKematian) }}">
                @error('sebabKematian')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>    
            <button type="submit" class="btn btn-primary mb-5">Edit Surat</button>
          </form>
    </div>

@endsection