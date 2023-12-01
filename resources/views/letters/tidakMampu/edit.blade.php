@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ms-4">Surat Tidak Mampu</h1>
    </div>

    <div class="col-lg-8 ms-4">
        <form action="/surat/tidakmampu/{{ $tidakmampu->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomorSurat" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control @error('nomorSurat') is-invalid @enderror" id="nomorSurat" name="nomorSurat" required autofocus value="{{ old('nomorSurat', $tidakmampu->nomorSurat) }}">
                @error('nomorSurat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $tidakmampu->nama) }}">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik', $tidakmampu->nik) }}">
              @error('nik')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
              @enderror
          </div>
            <div class="mb-3">
              <label for="tempatLahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempatLahir') is-invalid @enderror" id="tempatLahir" name="tempatLahir" required value="{{ old('tempatLahir', $tidakmampu->tempatLahir) }}">
              @error('tempatLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tanggalLahir') is-invalid @enderror" id="tanggalLahir" name="tanggalLahir" required value="{{ old('tanggalLahir', $tidakmampu->tanggalLahir) }}">
              @error('tanggalLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="kelamin" class="form-label">Jenis Kelamin</label>
              {{-- <input type="text" class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin" required value="{{ old('kelamin') }}"> --}}
              <select name="kelamin" id="kelamin" class="form-select @error('kelamin') is-invalid @enderror" required value="{{ old('kelamin', $tidakmampu->kelamin) }}">
                
                  @if(old('kelamin', $tidakmampu->kelamin) == 'L')
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L" selected>Laki-laki</option>
                    <option value="P">Perempuan</option>
                  @elseif(old('kelamin', $tidakmampu->kelamin) == 'P')
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
              <label for="pekerjaan" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" required value="{{ old('pekerjaan', $tidakmampu->pekerjaan) }}">
              @error('pekerjaan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>    
            <div class="mb-3">
              <label for="sekolah" class="form-label">Sekolah</label>
              <input type="text" class="form-control @error('sekolah') is-invalid @enderror" id="sekolah" name="sekolah" required value="{{ old('sekolah', $tidakmampu->sekolah) }}">
              @error('sekolah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>    
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat', $tidakmampu->alamat) }}">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>
              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>
              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>

            <div class="my-3">
                <label for="namaAyah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control @error('namaAyah') is-invalid @enderror" id="namaAyah" name="namaAyah" required value="{{ old('namaAyah', $tidakmampu->namaAyah) }}">
                @error('namaAyah')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nikAyah" class="form-label">NIK Ayah</label>
                <input type="text" class="form-control @error('nikAyah') is-invalid @enderror" id="nikAyah" name="nikAyah" required value="{{ old('nikAyah', $tidakmampu->nikAyah) }}">
                @error('nikAyah')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="tempatLahirAyah" class="form-label">Tempat Lahir Ayah</label>
              <input type="text" class="form-control @error('tempatLahirAyah') is-invalid @enderror" id="tempatLahirAyah" name="tempatLahirAyah" required value="{{ old('tempatLahirAyah', $tidakmampu->tempatLahirAyah) }}">
              @error('tempatLahirAyah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahirAyah" class="form-label">Tanggal Lahir Ayah</label>
              <input type="date" class="form-control @error('tanggalLahirAyah') is-invalid @enderror" id="tanggalLahirAyah" name="tanggalLahirAyah" required value="{{ old('tanggalLahirAyah', $tidakmampu->tanggalLahirAyah) }}">
              @error('tanggalLahirAyah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="pekerjaanAyah" class="form-label">Pekerjaan Ayah</label>
              <input type="text" class="form-control @error('pekerjaanAyah') is-invalid @enderror" id="pekerjaanAyah" name="pekerjaanAyah" required value="{{ old('pekerjaanAyah', $tidakmampu->pekerjaanAyah) }}">
              @error('pekerjaanAyah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="alamatAyah" class="form-label">Alamat Ayah</label>
              <input type="text" class="form-control @error('alamatAyah') is-invalid @enderror" id="alamatAyah" name="alamatAyah" required value="{{ old('alamatAyah', $tidakmampu->alamatAyah) }}">
              @error('alamatAyah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="my-3">
                <label for="namaIbu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control @error('namaIbu') is-invalid @enderror" id="namaIbu" name="namaIbu" required value="{{ old('namaIbu', $tidakmampu->namaIbu) }}">
                @error('namaIbu')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nikIbu" class="form-label">NIK Ibu</label>
                <input type="text" class="form-control @error('nikIbu') is-invalid @enderror" id="nikIbu" name="nikIbu" required value="{{ old('nikIbu', $tidakmampu->nikIbu) }}">
                @error('nikIbu')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="tempatLahirIbu" class="form-label">Tempat Lahir Ibu</label>
              <input type="text" class="form-control @error('tempatLahirIbu') is-invalid @enderror" id="tempatLahirIbu" name="tempatLahirIbu" required value="{{ old('tempatLahirIbu', $tidakmampu->tempatLahirIbu) }}">
              @error('tempatLahirIbu')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahirIbu" class="form-label">Tanggal Lahir Ibu</label>
              <input type="date" class="form-control @error('tanggalLahirIbu') is-invalid @enderror" id="tanggalLahirIbu" name="tanggalLahirIbu" required value="{{ old('tanggalLahirIbu', $tidakmampu->tanggalLahirIbu) }}">
              @error('tanggalLahirIbu')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="pekerjaanIbu" class="form-label">Pekerjaan Ibu</label>
              <input type="text" class="form-control @error('pekerjaanIbu') is-invalid @enderror" id="pekerjaanIbu" name="pekerjaanIbu" required value="{{ old('pekerjaanIbu', $tidakmampu->pekerjaanIbu) }}">
              @error('pekerjaanIbu')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="alamatIbu" class="form-label">Alamat Ibu</label>
              <input type="text" class="form-control @error('alamatIbu') is-invalid @enderror" id="alamatIbu" name="alamatIbu" required value="{{ old('alamatIbu', $tidakmampu->alamatIbu) }}">
              @error('alamatIbu')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>     
            
            <button type="submit" class="btn btn-primary mb-5">Edit Surat</button>
          </form>
    </div>

@endsection