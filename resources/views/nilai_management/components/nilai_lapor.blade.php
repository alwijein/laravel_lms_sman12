@extends('nilai_management.show_nilai_lapor')


@section('component')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card-body invoice-padding pt-0">
                    <div class="row invoice-spacing ">
                        <div class="col-xl-10 p-0">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-1">Nama Sekolah:</td>
                                        <td><span class="fw-bold">SMAN 12 Makassar</span></td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Alamat:</td>
                                        <td>{{$siswa->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Nama Peserta Didik:</td>
                                        <td>{{$siswa->nama_siswa}}</td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Nomor Induk / NISN:</td>
                                        <td>{{$siswa->no_induk}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xl-2 p-0 mt-xl-0 mt-2">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pe-1">Kelas:</td>
                                        <td><span class="fw-bold">{{$siswa->kelas->kelas}}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="pe-1">Semester:</td>
                                        <td>{{$semester}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <h4 class="mt-2 mb-1">CAPAIAN HASIL BELAJAR</h4>
                <h4 class="mt-2 mb-1">A. SIKAP</h4>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">1. Sikap Spritual</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Predikat</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilaiSikapSpritual as $data)
                                    <tr>
                                        <td>{{ $data->predikat }}</td>
                                        <td>{{ $data->desk }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">2. Sikap Sosial</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Predikat</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilaiSikapSosial as $data)
                                    <tr>
                                        <td>{{ $data->predikat }}</td>
                                        <td>{{ $data->desk }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <h4 class="mt-2 mb-1">B. PENGETAHUAN</h4>
                <P class="mt-2 mb-1">Kriteria Ketuntasan Minimal = 75</P>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nilai Pengetahuan</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai</th>
                                    <th>Predikat</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($nilai as $data)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $data->pelajaran->mata_pelajaran }}</td>
                                        <td>{{ $data->nilai }}</td>
                                        <td>{{ $data->predikat }}</td>
                                        <td>{{ $data->desk_pengetahuan }}</td>
                                    </tr>
                                    @php
                                        $count = $count+1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <h4 class="mt-2 mb-1">C. KETERAMPILAN</h4>
                <P class="mt-2 mb-1">Kriteria Ketuntasan Minimal = 75</P>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nilai Keterampilan</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai</th>
                                    <th>Predikat</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($nilai as $data)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $data->pelajaran->mata_pelajaran }}</td>
                                        <td>{{ $data->nilai }}</td>
                                        <td>{{ $data->predikat }}</td>
                                        <td>{{ $data->desk_keterampilan }}</td>
                                    </tr>
                                    @php
                                        $count = $count+1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <h4 class="mt-2 mb-1">D. EKSTRAKURIKULER</h4>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nilai Ekstrakurikuler</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan Ekstrakurikuler</th>
                                    <th>Nilai</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($ekstrakurikuler as $data)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $data->kegiatan }}</td>
                                        <td>{{ $data->nilai }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                    </tr>
                                    @php
                                        $count = $count+1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <h4 class="mt-2 mb-1">D. PRESTASI</h4>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Prestasi Siswa</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kegiatan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($prestasi as $data)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $data->jenisKegiatan }}</td>
                                        <td>{{ $data->keterangan}}</td>
                                    </tr>
                                    @php
                                        $count = $count+1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <h4 class="mt-2 mb-1">F. KETIDAKHADIRAN</h4>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Prestasi Siswa</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Izin</th>
                                    <th>Bertugas Keluar</th>
                                    <th>Sakit</th>
                                    <th>Terlambat</th>
                                    <th>Tanpa Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>{{ $absen["izin"] }}</td>
                                        <td>{{ $absen["bertugasKeluar"] }}</td>
                                        <td>{{ $absen["sakit"] }}</td>
                                        <td>{{ $absen["terlambat"] }}</td>
                                        <td>{{ $absen["tanpaKeterangan"] }}</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
