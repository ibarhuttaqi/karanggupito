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
        <nav class="pt-4 p-3">
            <h3>SURAT KETERANGAN KELAHIRAN</h3>
            <p>NOMOR : {{ $kelahiran->nomorSurat }}</p>
        </nav>
        <main>
            <p>Yang bertanda tangan dibawah ini  Kepala Desa Karanggupito Kecamatan Kendal, Kabupaten Ngawi menerangkan dengan sesungguhnya  :</p>
            <div class="ms-3">
                <span style="margin-right: 73px;">
                    Nama Lengkap
                </span>
                <span>: </span>
                <span>{{ $kelahiran->namaBayi }}</span>
                <br>

                <span style="margin-right: 80px;">
                    Jenis Kelamin
                </span>
                <span>: </span>
                @if($kelahiran->kelamin == 'L')
                    <span>Laki-laki</span>
                @else
                    <span>Perempuan</span>
                @endif
                {{-- <span>{{ $kelahiran->kelamin }}</span> --}}
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $kelahiran->tempatLahir }}, {{ $kelahiran->tanggalLahir }}</span>
                <br>

                <span style="margin-right: 108px;">
                    Pekerjaan
                </span>
                <span>: </span>
                <span>{{ $kelahiran->pekerjaan }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $kelahiran->alamat }}</span>
                <br>

                <span style="margin-right: 114px;">
                    Anak Ke
                </span>
                <span>: </span>
                <span>{{ $kelahiran->anakKe }}</span>
                <br>
            </div>

            <p class="mt-3">Orang tersebut di atas Adalah benar - benar anak kandung dari seorang Ibu :</p>
            <div class="ms-3">
                <span style="margin-right: 73px;">
                    Nama Lengkap
                </span>
                <span>: </span>
                <span>{{ $kelahiran->namaIbu }}</span>
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $kelahiran->tempatLahirIbu }}, {{ \Carbon\Carbon::parse($kelahiran->tanggalLahirIbu)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $kelahiran->alamatIbu }}</span>
                <br>
            </div>

            <p class="mt-3">Dan Anak dari seorang ayah :</p>
            <div class="ms-3">
                <span style="margin-right: 73px;">
                    Nama Lengkap
                </span>
                <span>: </span>
                <span>{{ $kelahiran->namaAyah }}</span>
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $kelahiran->tempatLahirAyah }}, {{ \Carbon\Carbon::parse($kelahiran->tanggalLahirAyah)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $kelahiran->alamatAyah }}</span>
                <br>
            </div>

            <p class="mt-3">Demikian Surat keterangan ini di buat dengan sebenarnya dan untuk dapat dipergunakan seperlunya.</p>
        </main>
        <footer class="pb-3">
            {{-- style="margin-top: 70px;" --}}
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
