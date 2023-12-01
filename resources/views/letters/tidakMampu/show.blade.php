@extends('layouts.print')


@section('container')
    <div class="container text-center">
        <header class="m-0">
            <img src="img/logo.jpg" class="mt-4" width=100 height=100 alt="">
            <h3 class="mt-4 mb-0">PEMERINTAH KABUPATEN NGAWI</h3>
            <h2 class="my-0">KECAMATAN KENDAL</h2>
            <h2 class="my-0">KANTOR KEPALA DESA KARANGGUPITO</h2>
            <P class="my-0">Jl. Raya Karanggupito, Kec. Kendal, Kab. Ngawi, Prop. Jatim, Tlp.(0351) 8511945, Kode Pos 63261</P>
            {{-- <p>Email: dskaranggupitokendal@gmail.com Website :karanggupito.ngawikab.id</p> --}}
            <a href="karanggupito.ngawikab.id">Email: dskaranggupitokendal@gmail.com Website :karanggupito.ngawikab.id</a>
        </header>
        <nav class="pt-2 p-2">
            <h3>SURAT KETERANGAN TIDAK MAMPU</h3>
            <p>NOMOR : {{ $tidakmampu->nomorSurat }}</p>
        </nav>
        <main>
            <p>Yang bertanda tangan di bawah ini Kepala Desa Karangupito Kecamatan Kendal Kabupaten Ngawi menerangkan dengan sesungguhnya bahwa :</p>
            <div class="ms-3">
                <span style="margin-right: 73px;">
                    Nama Lengkap
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->nama }}</span>
                <br>

                <span style="margin-right: 143px;">
                    NIK
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->nik }}</span>
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->tempatLahir }}, {{ \Carbon\Carbon::parse($tidakmampu->tanggalLahir)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 80px;">
                    Jenis Kelamin
                </span>
                <span>: </span>
                @if($tidakmampu->kelamin == 'L')
                    <span>Laki-laki</span>
                @else
                    <span>Perempuan</span>
                @endif
                {{-- <span>{{ $tidakmampu->kelamin }}</span> --}}
                <br>

                <span style="margin-right: 108px;">
                    Pekerjaan
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->pekerjaan }}</span>
                <br>

                <span style="margin-right: 103px;">
                    Sekolah di
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->sekolah }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->alamat }}</span>
                <br>

                <br>
                <span class="mt-3">Anak dari :</span>
                <br>
                <span style="margin-right: 95px;">
                    Nama Ayah
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->namaAyah }}</span>
                <br>

                <span style="margin-right: 143px;">
                    NIK
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->nikAyah }}</span>
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->tempatLahirAyah }}, {{ \Carbon\Carbon::parse($tidakmampu->tanggalLahirAyah)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 108px;">
                    Pekerjaan
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->pekerjaanAyah }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->alamatAyah }}</span>
                <br>

                <br>

                <span style="margin-right: 108px;">
                    Nama Ibu
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->namaIbu }}</span>
                <br>

                <span style="margin-right: 143px;">
                    NIK
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->nikIbu }}</span>
                <br>

                <span style="margin-right: 5px;">
                    Tempat dan Tanggal lahir
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->tempatLahirIbu }}, {{ \Carbon\Carbon::parse($tidakmampu->tanggalLahirIbu)->format('d-m-Y') }}</span>
                <br>

                <span style="margin-right: 108px;">
                    Pekerjaan
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->pekerjaanIbu }}</span>
                <br>

                <span style="margin-right: 124px;">
                    Alamat
                </span>
                <span>: </span>
                <span>{{ $tidakmampu->alamatIbu }}</span>
                <br>

            </div>
            <br>
            <span class="mt-3">Maksud Keterangan</span>
            <br>
            <span class="mt-0 ms-3">1. Orang tersebut diatas adalah benar-benar berasal dari keluarga kurang mampu, untuk itu agar dapatnya pihak berwenang / sekolah memberikan fasilitas Bea siswa / keringanan biaya Pendidikan kepada yang bersangkutan.</span>
            <br>
            <span class="ms-3">2. Demikian Surat Keterangan ini di buat dengan sebenarnya dan dapat di pergunakan seperlunya.</span>
        </main>
        <footer class="pb-2">
            <p style="margin-right: 118px;">Karangupito, {{ now()->format('d-m-Y') }}</p>
            <p style="margin-right: 117px;">Kepala Desa Karangupito</p>
            <br>
            <br>
            <br>
            <h6 style="margin-right: 80px;">BAMBANG SURYO S., SE, MM</h6>
        </footer>
    </div>
@endsection
