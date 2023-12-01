@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ms-4">Edit Surat Kelahiran</h1>
    </div>

    <div class="col-lg-8 ms-4">
        <form action="/surat/kelahiran/{{ $kelahiran->id }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="nomorSurat" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control @error('nomorSurat') is-invalid @enderror" id="nomorSurat" name="nomorSurat" required autofocus value="{{ old('nomorSurat', $kelahiran->nomorSurat) }}">
                @error('nomorSurat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="namaBayi" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('namaBayi') is-invalid @enderror" id="namaBayi" name="namaBayi" required value="{{ old('namaBayi', $kelahiran->namaBayi) }}">
                @error('namaBayi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="tempatLahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempatLahir') is-invalid @enderror" id="tempatLahir" name="tempatLahir" required value="{{ old('tempatLahir', $kelahiran->tempatLahir) }}">
              @error('tempatLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tanggalLahir') is-invalid @enderror" id="tanggalLahir" name="tanggalLahir" required value="{{ old('tanggalLahir', $kelahiran->tanggalLahir) }}">
              @error('tanggalLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat', $kelahiran->alamat) }}">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>    
            {{-- <div class="mb-3">
              <label for="agama" class="form-label">Agama</label>
              <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" required value="{{ old('agama', $kelahiran->agama) }}">
              @error('agama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div> --}}
            <div class="mb-3">
              <label for="kelamin" class="form-label">Jenis Kelamin</label>
              {{-- <input type="text" class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin" required value="{{ old('kelamin') }}"> --}}
              <select name="kelamin" id="kelamin" class="form-select @error('kelamin') is-invalid @enderror" required value="{{ old('kelamin', $kelahiran->kelamin) }}">
                
                  @if(old('kelamin', $kelahiran->kelamin) == 'L')
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L" selected>Laki-laki</option>
                    <option value="P">Perempuan</option>
                  @elseif(old('kelamin', $kelahiran->kelamin) == 'P')
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
                <label for="anakKe" class="form-label">Anak ke</label>
                <input type="number" class="form-control @error('anakKe') is-invalid @enderror" id="anakKe" name="anakKe" required value="{{ old('anakKe', $kelahiran->anakKe) }}">
                @error('anakKe')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="pekerjaan" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" required value="{{ old('pekerjaan', $kelahiran->pekerjaan) }}">
              @error('pekerjaan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>
              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>
              <i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i><i class="bi bi-dash-lg"></i>


            
            {{-- <div class="mb-3">
                <label for="nkk" class="form-label">NKK</label>
                <input type="text" class="form-control @error('nkk') is-invalid @enderror" id="nkk" name="nkk" required value="{{ old('nkk', $kelahiran->nkk) }}">
                @error('nkk')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div> --}}
            <div class="my-3">
                <label for="namaAyah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control @error('namaAyah') is-invalid @enderror" id="namaAyah" name="namaAyah" required value="{{ old('namaAyah', $kelahiran->namaAyah) }}">
                @error('namaAyah')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="nikAyah" class="form-label">NIK Ayah</label>
                <input type="text" class="form-control @error('nikAyah') is-invalid @enderror" id="nikAyah" name="nikAyah" required value="{{ old('nikAyah', $kelahiran->nikAyah) }}">
                @error('nikAyah')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div> --}}
            <div class="mb-3">
              <label for="tempatLahirAyah" class="form-label">Tempat Lahir Ayah</label>
              <input type="text" class="form-control @error('tempatLahirAyah') is-invalid @enderror" id="tempatLahirAyah" name="tempatLahirAyah" required value="{{ old('tempatLahirAyah', $kelahiran->tempatLahirAyah) }}">
              @error('tempatLahirAyah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahirAyah" class="form-label">Tanggal Lahir Ayah</label>
              <input type="date" class="form-control @error('tanggalLahirAyah') is-invalid @enderror" id="tanggalLahirAyah" name="tanggalLahirAyah" required value="{{ old('tanggalLahirAyah', $kelahiran->tanggalLahirAyah) }}">
              @error('tanggalLahirAyah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="alamatAyah" class="form-label">Alamat Ayah</label>
              <input type="text" class="form-control @error('alamatAyah') is-invalid @enderror" id="alamatAyah" name="alamatAyah" required value="{{ old('alamatAyah', $kelahiran->alamatAyah) }}">
              @error('alamatAyah')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>    
            <div class="my-3">
                <label for="namaIbu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control @error('namaIbu') is-invalid @enderror" id="namaIbu" name="namaIbu" required value="{{ old('namaIbu', $kelahiran->namaIbu) }}">
                @error('namaIbu')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="nikIbu" class="form-label">NIK Ibu</label>
                <input type="text" class="form-control @error('nikIbu') is-invalid @enderror" id="nikIbu" name="nikIbu" required value="{{ old('nikIbu', $kelahiran->nikIbu) }}">
                @error('nikIbu')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div> --}}
            <div class="mb-3">
              <label for="tempatLahirIbu" class="form-label">Tempat Lahir Ibu</label>
              <input type="text" class="form-control @error('tempatLahirIbu') is-invalid @enderror" id="tempatLahirIbu" name="tempatLahirIbu" required value="{{ old('tempatLahirIbu', $kelahiran->tempatLahirIbu) }}">
              @error('tempatLahirIbu')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahirIbu" class="form-label">Tanggal Lahir Ibu</label>
              <input type="date" class="form-control @error('tanggalLahirIbu') is-invalid @enderror" id="tanggalLahirIbu" name="tanggalLahirIbu" required value="{{ old('tanggalLahirIbu', $kelahiran->tanggalLahirIbu) }}">
              @error('tanggalLahirIbu')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="alamatIbu" class="form-label">Alamat Ibu</label>
              <input type="text" class="form-control @error('alamatIbu') is-invalid @enderror" id="alamatIbu" name="alamatIbu" required value="{{ old('alamatIbu', $kelahiran->alamatIbu) }}">
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