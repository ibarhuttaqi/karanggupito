@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 ms-4">Surat Kehilangan</h1>
    </div>

    <div class="col-lg-8 ms-4">
        <form action="/surat/kehilangan/{{ $kehilangan->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomorSurat" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control @error('nomorSurat') is-invalid @enderror" id="nomorSurat" name="nomorSurat" required autofocus value="{{ old('nomorSurat', $kehilangan->nomorSurat) }}">
                @error('nomorSurat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $kehilangan->nama) }}">
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik', $kehilangan->nik) }}">
              @error('nik')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>
              @enderror
          </div>
            <div class="mb-3">
              <label for="tempatLahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control @error('tempatLahir') is-invalid @enderror" id="tempatLahir" name="tempatLahir" required value="{{ old('tempatLahir', $kehilangan->tempatLahir) }}">
              @error('tempatLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control @error('tanggalLahir') is-invalid @enderror" id="tanggalLahir" name="tanggalLahir" required value="{{ old('tanggalLahir', $kehilangan->tanggalLahir) }}">
              @error('tanggalLahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="agama" class="form-label">Agama</label>
              <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" required value="{{ old('agama', $kehilangan->agama) }}">
              @error('agama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="kelamin" class="form-label">Jenis Kelamin</label>
              {{-- <input type="text" class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin" required value="{{ old('kelamin') }}"> --}}
              <select name="kelamin" id="kelamin" class="form-select @error('kelamin') is-invalid @enderror" required value="{{ old('kelamin', $kehilangan->kelamin) }}">
                
                  @if(old('kelamin', $kehilangan->kelamin) == 'L')
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L" selected>Laki-laki</option>
                    <option value="P">Perempuan</option>
                  @elseif(old('kelamin', $kehilangan->kelamin) == 'P')
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
              <label for="status" class="form-label">Status Kawin</label>
              {{-- <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" required value="{{ old('status') }}"> --}}
              <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                
                @if(old('status', $kehilangan->status) == 'S')
                    <option value="">Pilih</option>
                    <option value="B">Belum</option>
                    <option value="S" selected>Sudah</option>
                    <option value="P">Pernah</option>
                  @elseif(old('status', $kehilangan->status) == 'B')
                    <option value="">Pilih</option>
                    <option value="B" selected>Belum</option>
                    <option value="S">Sudah</option>
                    <option value="P">Pernah</option>
                  @elseif(old('status', $kehilangan->status) == 'P')
                    <option value="">Pilih</option>
                    <option value="B">Belum</option>
                    <option value="S">Sudah</option>
                    <option value="P" selected>Pernah</option>
                  @else
                    <option value="" selected>Pilih</option>
                    <option value="B">Belum</option>
                    <option value="S">Sudah</option>
                    <option value="P">Pernah</option>
                @endif
              
              </select>
              @error('status')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="kebangsaan" class="form-label">Kebangsaan</label>
              <input type="text" class="form-control @error('kebangsaan') is-invalid @enderror" id="kebangsaan" name="kebangsaan" required value="{{ old('kebangsaan', $kehilangan->kebangsaan) }}">
              @error('kebangsaan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            {{-- <div class="mb-3">
              <label for="kebangsaan" class="form-label">Kebangsaan</label>
              <select name="kebangsaan" id="kebangsaan" class="form-select @error('kebangsaan') is-invalid @enderror" required value="{{ old('kebangsaan', $kehilangan->kebangsaan) }}">
                
                  @if(old('kebangsaan', $kehilangan->kebangsaan) == 'WNI')
                    <option value="">Pilih kebangsaan</option>
                    <option value="WNI" selected>Warga Negara Indonesia</option>
                    <option value="WNA">Warga Negara Asing</option>
                  @elseif(old('kebangsaan', $kehilangan->kebangsaan) == 'WNA')
                    <option value="">Pilih kebangsaan</option>
                    <option value="WNI">Warga Negara Indonesia</option>
                    <option value="WNA" selected>Warga Negara Asing</option>
                  @else
                    <option value="" selected>Pilih kebangsaan</option>
                    <option value="WNI">Warga Negara Indonesia</option>
                    <option value="WNA">Warga Negara Asing</option>
                  @endif
              </select>
              @error('kebangsaan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div> --}}

            <div class="mb-3">
              <label for="pekerjaan" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" required value="{{ old('pekerjaan', $kehilangan->pekerjaan) }}">
              @error('pekerjaan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>    
            
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat', $kehilangan->alamat) }}">
              @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="keterangan" class="form-label">Keterangan Hilang</label>
              <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required value="{{ old('keterangan', $kehilangan->keterangan) }}">
              @error('keterangan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mb-5">Edit Surat</button>
          </form>
    </div>

@endsection