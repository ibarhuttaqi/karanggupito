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
            <h3>SURAT KETERANGAN KEHILANGAN</h3>
            <p>NOMOR : {{ $kehilangan->nomorSurat }}</p>
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
                <span><b>{{ $kehilangan->nama }}</b></span>
                <br>

                <span style="margin-right: 143px;">
                    NIK
                </span>
                <span>: </span>
                <span>{{ $kehilangan->nik }}</span>
                <br>

                <span style="margin-right: 6px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $kehilangan->tempatLahir }}, {{ \Carbon\Carbon::parse($kehilangan->tanggalLahir)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 125px;">
                    Agama
                </span>
                <span>: </span>
                <span>{{ $kehilangan->agama }}</span>
                <br>

                <span style="margin-right: 80px;">
                    Jenis Kelamin
                </span>
                <span>: </span>
                @if($kehilangan->kelamin == 'L')
                    <span>Laki-laki</span>
                @else
                    <span>Perempuan</span>
                @endif
                {{-- <span>{{ $kehilangan->kelamin }}</span> --}}
                <br>

                <span style="margin-right: 53px;">
                    Status Perkawinan
                </span>
                <span>: </span>
                @if($kehilangan->status == 'B')
                    <span>Belum Kawin</span>
                @elseif($kehilangan->status == 'S')
                    <span>Kawin</span>
                @else
                    <span>Cerai</span>
                @endif
                <br>

                <span style="margin-right: 93px;">
                    Kebangsaan
                </span>
                <span>: </span>
                <span>{{ $kehilangan->kebangsaan }}</span>
                <br>

                <span style="margin-right: 108px;">
                    Pekerjaan
                </span>
                <span>: </span>
                <span>{{ $kehilangan->pekerjaan }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $kehilangan->alamat }}</span>
                <br>

            </div>

            <br>
            <p class="mt-3"><b>Keterangan</b>  :  Orang tersebut benar - benar Penduduk Desa  Karanggupito, Kecamatan Kendal  Kab.Ngawi dan telah Kehilangan :</p>
            <p>{{ $kehilangan->keterangan }}</p>
            <p>Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
        </main>
        <footer class="pb-3">
            {{-- style="margin-top: 20px;" --}}
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
