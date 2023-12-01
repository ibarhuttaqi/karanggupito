@extends('layouts.main')

@section('container')

  {{-- @if (session()->has('success'))
    <div class="alert alert-success col-lg-15" role="alert">
      {{ session('success') }}
    </div> 
  @endif --}}

  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('loginError') }}</strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


  <h1 class="text ms-5 mb-2" style="font-family: 'Abril_Fatface'; font-size: 50px"><b>Selamat Datang</b></h1>
  <h1 class="text ms-5 mb-5" style="font-family: 'Abril_Fatface'; font-size: 50px"><b>di Layanan Surat Desa</b></h1>
  <h1 class="text ms-5 mb-2" style="font-family: 'Playfair_Display'; font-size: 30px"><b>Layanan Pembuatan Surat Desa</b></h1>
  <p class="text ms-5 mb-5" style="font-family: 'itim'; font-size: 20px">Memudahkan Anda dalam mendapatkan berbagai jenis surat penting.</p>
  
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col-md-3 mb-3">
        <div class="card bg-light border-top border-start border-opacity-50 bg-gradient bg-opacity-50" style="width: 18rem;">
          <img src="img/kelahiran.png" class="card-img-top mt-4" style="width: 80px; margin:auto;" alt="...">
          {{-- <img src="" class="bg-light bg-gradient bg-opacity-25 rounded-circle" alt=""> --}}
          {{-- <i class="bi bi-heart"></i> --}}
          <div class="card-body">
            <h5 class="card-title">Surat Kelahiran</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/kelahiran/create" class="btn btn-primary">Buat Surat</a>

              @can('admin')
                <a href="/surat/kelahiran" class="btn btn-primary">Lihat Data</a>               
              @endcan

            </div>
          </div>
        </div>      
      </div>

      <div class="col-md-3 mb-3">
        <div class="card bg-light border-top border-start border-opacity-50 bg-gradient bg-opacity-50" style="width: 18rem;">
          <img src="img/kematian.png" class="card-img-top mt-4" style="width: 80px; margin:auto;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Surat Kematian</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/kematian/create" class="btn btn-primary">Buat Surat</a>

              @can('admin')
                <a href="/surat/kematian" class="btn btn-primary">Lihat Data</a>               
              @endcan
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card bg-light border-top border-start border-opacity-50 bg-gradient bg-opacity-50" style="width: 18rem;">
          <img src="img/tidakmampu.png" class="card-img-top mt-4" style="width: 80px; margin:auto;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Surat Tidak Mampu</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/tidakmampu/create" class="btn btn-primary">Buat Surat</a>

              @can('admin')
                <a href="/surat/tidakmampu" class="btn btn-primary">Lihat Data</a>                 
              @endcan
            </div>
          </div>
        </div>      
      </div>

      {{-- <div class="col-md-3 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Surat ODR</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/odr/create" class="btn btn-primary">Buat Surat</a>
              <a href="/surat/odr" class="btn btn-primary">Lihat Data</a>
            </div>
          </div>
        </div>      
      </div> --}}

      <div class="col-md-3 mb-3">
        <div class="card bg-light border-top border-start border-opacity-50 bg-gradient bg-opacity-50" style="width: 18rem;">
          <img src="img/skck.png" class="card-img-top mt-4" style="width: 80px; margin:auto;" alt="...">
          <div class="card-body">
            <h5 class="card-title">SKCK</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/skck/create" class="btn btn-primary">Buat Surat</a>

              @can('admin')
                <a href="/surat/skck" class="btn btn-primary">Lihat Data</a>  
              @endcan
            </div>
          </div>
        </div>      
      </div>

      <div class="col-md-3 mb-3">
        <div class="card bg-light border-top border-start border-opacity-50 bg-gradient bg-opacity-50" style="width: 18rem;">
          <img src="img/kehilangan.png" class="card-img-top mt-4" style="width: 80px; margin:auto;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Surat Kehilangan</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/kehilangan/create" class="btn btn-primary">Buat Surat</a>

              @can('admin')  
                <a href="/surat/kehilangan" class="btn btn-primary">Lihat Data</a>
              @endcan
            </div>
          </div>
        </div>      
      </div>

      <div class="col-md-3 mb-3">
        <div class="card bg-light border-top border-start border-opacity-50 bg-gradient bg-opacity-50" style="width: 18rem;">
          <img src="img/domisili.png" class="card-img-top mt-4" style="width: 80px; margin:auto;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Surat Domisili</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/domisili/create" class="btn btn-primary">Buat Surat</a>

              @can('admin')
                <a href="/surat/domisili" class="btn btn-primary">Lihat Data</a>              
              @endcan
            </div>
          </div>
        </div>      
      </div>

      <div class="col-md-3 mb-3">
        <div class="card bg-light border-top border-start border-opacity-50 bg-gradient bg-opacity-50" style="width: 18rem;">
          <img src="img/bepergian.png" class="card-img-top mt-4" style="width: 80px; margin:auto;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Surat Bepergian</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/bepergian/create" class="btn btn-primary">Buat Surat</a>

              @can('admin')         
                <a href="/surat/bepergian" class="btn btn-primary">Lihat Data</a>
              @endcan
            </div>
          </div>
        </div>      
      </div>

      <div class="col-md-3 mb-3">
        <div class="card bg-light border-top border-start border-opacity-50 bg-gradient bg-opacity-50" style="width: 18rem;">
          <img src="img/blmnikah.png" class="card-img-top mt-4" style="width: 80px; margin:auto;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Surat Belum Nikah</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-evenly">
              <a href="/surat/blmnikah/create" class="btn btn-primary">Buat Surat</a>
              @can('admin')  
                <a href="/surat/blmnikah" class="btn btn-primary">Lihat Data</a>
              @endcan
            </div>
          </div>
        </div>      
      </div>

    </div>
  </div>
  <h1 class="text ms-5 mb-2 mt-4" style="font-family: 'Playfair_Display'; font-size: 30px"><b>Tentang Layanan Kami</b></h1>
  <span class="text ms-5" style="font-family: 'itim'; font-size: 18px">Kami menyediakan layanan cepat dan akurat dalam pembuatan berbagai surat desa, termasuk Surat Keterangan Catatan Kepolisian (SKCK), Surat Keterangan Tidak Mampu, dan lainnya.</span>
  <br>
  <span class="text ms-5" style="font-family: 'itim'; font-size: 18px">Kami berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat dengan proses yang efisien dan aman.</span>
  <br><br><br>
  @endsection