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
            <h3>SURAT KETERANGAN DOMISILI</h3>
            <p>NOMOR : {{ $domisili->nomorSurat }}</p>
        </nav>
        <main>
            <p>Yang bertanda tangan di bawah ini Kepala Desa Karanggupito Kecamatan Kendal Kabupaten Ngawi menerangkan bahwa sebenarnya penduduk Kami</p>

            <div class="ms-3">
                <span style="margin-right: 73px;">
                    Nama Lengkap
                </span>
                <span>: </span>
                <span><b>{{ $domisili->nama }}</b></span>
                <br>

                <span style="margin-right: 143px;">
                    NIK
                </span>
                <span>: </span>
                <span>{{ $domisili->nik }}</span>
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $domisili->tempatLahir }}, {{ \Carbon\Carbon::parse($domisili->tanggalLahir)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 80px;">
                    Jenis Kelamin
                </span>
                <span>: </span>
                @if($domisili->kelamin == 'L')
                    <span>Laki-laki</span>
                @else
                    <span>Perempuan</span>
                @endif
                {{-- <span>{{ $domisili->kelamin }}</span> --}}
                <br>

                <span style="margin-right: 124px;">
                    Agama
                </span>
                <span>: </span>
                <span>{{ $domisili->agama }}</span>
                <br>

                <span style="margin-right: 93px;">
                    Kebangsaan
                </span>
                <span>: </span>
                <span>{{ $domisili->kebangsaan }}</span>
                <br>

                <span style="margin-right: 53px;">
                    Status Perkawinan
                </span>
                <span>: </span>
                @if($domisili->status == 'B')
                    <span>Belum Kawin</span>
                @elseif($domisili->status == 'S')
                    <span>Kawin</span>
                @else
                    <span>Cerai</span>
                @endif
                <br>

                <span style="margin-right: 108px;">
                    Pekerjaan
                </span>
                <span>: </span>
                <span>{{ $domisili->pekerjaan }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $domisili->alamat }}</span>
                <br>

            </div>

            <br>
            <p class="mt-3"><b>Maksud Keterangan  : </b></p>
            <p>Orang tersebut benar - benar Penduduk Desa Karanggupito dan berdomisili di {{ $domisili->alamat }}</p>
            <p>Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
        </main>
        <footer class="pb-3">
            {{-- style="margin-top: 110px;" --}}
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
