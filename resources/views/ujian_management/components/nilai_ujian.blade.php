@extends('ujian_management.show_nilai_ujian')


@section('component')
<section class="app-user-list">
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">Hasil Ujian {{$title}}</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Guru</th>
                                <th>Nilai</th>
                                <th>Predikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nilai as $data)
                                <tr>
                                    <td>{{ $data->pelajaran->mata_pelajaran }}</td>
                                    <td>{{ $data->kelas->kelas }}</td>
                                    <td>{{ $data->guru->nama_guru }}</td>
                                    <td>{{ $data->nilai }}</td>
                                    <td>{{ $data->predikat }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</section>
@endsection
