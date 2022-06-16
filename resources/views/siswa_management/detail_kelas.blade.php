@extends('layouts.app')

@php
    $count = 1;
@endphp

@section('content')

    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Nomor Telpon</th>
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $data)
                                    <tr>
                                        <td>{{ $data->no_induk}}</td>
                                        <td>{{ $data->nama_siswa }}</td>
                                        <td>{{ $data->telp }}</td>
                                        <td>
                                            {{ $data->alamat }}
                                        </td>
                                        <td>
                                            {{ $data->tmp_lahir }}
                                        </td>
                                        <td>
                                            {{ $data->tgl_lahir }}
                                        </td>
                                        <td><span
                                            class="badge rounded-pill {{ $data->jk == 'wanita' ? 'badge-light-danger' : 'badge-light-primary' }}  me-1">{{ $data->jk }}</span>
                                        </td>
                                    </tr>
                                    @php
                                        $count = $count+1;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- users list ends -->
@endsection
