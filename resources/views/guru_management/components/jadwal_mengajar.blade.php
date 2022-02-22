@extends('guru_management.show_jadwal')

@section('component')
<section class="app-user-list">
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h4 class="card-title">Jadwal Mengajar {{$title}}</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Pelajaran</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->hari->nama_hari }}</td>
                                    <td>{{ $data->jam }}</td>
                                    <td>{{ $data->pelajaran->mata_pelajaran }}</td>

                                    <td>{{ $data->kelas->kelas }}</td>
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
