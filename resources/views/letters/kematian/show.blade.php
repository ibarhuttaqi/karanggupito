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
            <h3>SURAT KETERANGAN KEMATIAN</h3>
            <p>NOMOR : {{ $kematian->nomorSurat }}</p>
        </nav>
        <main>
            <p>Yang bertanda Tangan dibawah ini,  Kepala Desa Karanggupito, Kecamatan Kendal, Kabupaten Ngawi menerangkan dengan sebenarnya bahwa  :</p>
            <div class="ms-3">
                <span style="margin-right: 73px;">
                    Nama Lengkap
                </span>
                <span>: </span>
                <span>{{ $kematian->nama }}</span>
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $kematian->tempatLahir }}, {{ \Carbon\Carbon::parse($kematian->tanggalLahir)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 80px;">
                    Jenis Kelamin
                </span>
                <span>: </span>
                @if($kematian->kelamin == 'L')
                    <span>Laki-laki</span>
                @else
                    <span>Perempuan</span>
                @endif
                {{-- <span>{{ $kematian->kelamin }}</span> --}}
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $kematian->alamat }}</span>
                <br>

                <p class="mt-3">Telah Meninggal Dunia pada :</p>

                <span style="margin-right: 143px;">
                    Hari
                </span>
                <span>: </span>
                <span>{{ $kematian->hariMeninggal }}</span>
                <br>

                <span style="margin-right: 119px;">
                    Tanggal
                </span>
                <span>: </span>
                <span>{{ \Carbon\Carbon::parse($kematian->tanggalMeninggal)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 122px;">
                    Tempat
                </span>
                <span>: </span>
                <span>{{ $kematian->tempatMeninggal }}</span>
                <br>

                <span style="margin-right: 66px;">
                    Sebab Kematian
                </span>
                <span>: </span>
                <span>{{ $kematian->sebabKematian }}</span>
                <br>

            </div>

            <p class="mt-3">Demikian Surat keterangan  ini dibuat atas dasar yang sebenarnya dan agar dapat dipergunakan sebagaimana mestinya.</p>
        </main>
        <footer class="pb-3" style="margin-top: 50px;">
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
