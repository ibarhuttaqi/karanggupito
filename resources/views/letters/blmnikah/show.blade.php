@extends('layouts.print')


@section('container')
    <div class="container text-center">
        <header class="">
            <img src="img/logo.jpg" class="mt-4" width=100 height=100 alt="">
            <h3 class="mt-4 mb-0">PEMERINTAH KABUPATEN NGAWI</h3>
            <h2 class="my-0">KECAMATAN KENDAL</h2>
            <h2 class="my-0">KANTOR KEPALA DESA KARANGGUPITO</h2>
            <P class="my-0">Jl. Raya Karanggupito, Kec. Kendal, Kab. Ngawi, Prop. Jatim, Tlp.(0351) 8511945, Kode Pos 63261</P>
            {{-- <p>Email: dskaranggupitokendal@gmail.com Website :karanggupito.ngawikab.id</p> --}}
            <a href="karanggupito.ngawikab.id">Email: dskaranggupitokendal@gmail.com Website :karanggupito.ngawikab.id</a>
        </header>
        <nav class="pt-4 p-3 mt-3">
            <h3>SURAT KETERANGAN BELUM PERNAH MENIKAH</h3>
            <p>NOMOR : {{ $blmnikah->nomorSurat }}</p>
        </nav>
        <main>
            <p>Yang bertanda tangan dibawah ini Kepala Desa Karanggupito, Kec. Kendal, Kab. Ngawi</p>
            <div class="ms-3">
                <span style="margin-right: 73px;">
                    Nama Lengkap
                </span>
                <span>: </span>
                <span><b>BAMBANG SURYO S., SE, MM</b></span>
                <br>
                <span style="margin-right: 123px;">
                    Jabatan
                </span>
                <span>: </span>
                <span>Kepala Desa</span>
                <br>
            </div>
            <br>
            <p>Menerangkan dengan sesungguhnya bahwa :</p>
            <div class="ms-3">
                <span style="margin-right: 73px;">
                    Nama Lengkap
                </span>
                <span>: </span>
                <span><b>{{ $blmnikah->nama }}</b></span>
                <br>

                <span style="margin-right: 143px;">
                    NIK
                </span>
                <span>: </span>
                <span>{{ $blmnikah->nik }}</span>
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $blmnikah->tempatLahir }}, {{ \Carbon\Carbon::parse($blmnikah->tanggalLahir)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Agama
                </span>
                <span>: </span>
                <span>{{ $blmnikah->agama }}</span>
                <br>

                <span style="margin-right: 93px;">
                    Kebangsaan
                </span>
                <span>: </span>
                <span>{{ $blmnikah->kebangsaan }}</span>
                <br>

                <span style="margin-right: 80px;">
                    Jenis Kelamin
                </span>
                <span>: </span>
                @if($blmnikah->kelamin == 'L')
                    <span>Laki-laki</span>
                @else
                    <span>Perempuan</span>
                @endif
                {{-- <span>{{ $blmnikah->kelamin }}</span> --}}
                <br>

                <span style="margin-right: 53px;">
                    Status Perkawinan
                </span>
                <span>: </span>
                @if($blmnikah->status == 'B')
                    <span>Belum Kawin</span>
                @elseif($blmnikah->status == 'S')
                    <span>Kawin</span>
                @else
                    <span>Cerai</span>
                @endif
                <br>

                <span style="margin-right: 108px;">
                    Pekerjaan
                </span>
                <span>: </span>
                <span>{{ $blmnikah->pekerjaan }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $blmnikah->alamat }}</span>
                <br>

            </div>

            <br>
            <p class="mt-3"><b>Keterangan</b>  :  Orang yang bersangkutan  tersebut di atas benar-benar Penduduk Desa Karanggupito Kecamatan Kendal, Kabupaten Ngawi dan <b>Belum Pernah Menikah</b></p>
            <p>Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
        </main>
        <footer class="pb-3">
            <p style="margin-right: 118px;">Karangupito, {{ now()->format('d-m-Y') }}</p>
            <p style="margin-right: 117px;">Kepala Desa Karangupito</p>
            <br>
            <br>
            <br>
            <br>
            <h6 style="margin-right: 80px;">BAMBANG SURYO S., SE, MM</h6>
        </footer>
    </div>
@endsection
