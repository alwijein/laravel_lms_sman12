@extends('layouts.app')

@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Absensi Siswa {{$title->pertemuan}}</h4>
                        <div class="form-modal-ex">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                                Absen Siswa
                            </button>
                            <!-- Modal -->
                            <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Absen Siswa</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('input-absen', ['id'=> $id, 'kode_pertemuan' => $kode_pertemuan]) }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="basicSelect">Pilih Siswa</label>
                                                            <select class="form-select" id="basicSelect" name="kode_siswa">
                                                                <option disabled selected>Pilih Siswa</option>
                                                                @foreach ($siswa as $data)
                                                                <option value="{{$data->id}}">{{$data->nama_siswa}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="mb-1">
                                                            <label class="form-label" for="basicSelect">Pilih Kehadiran</label>
                                                            <select class="form-select" id="basicSelect" name="kode_kehadiran">
                                                                <option disabled selected>Pilih Kehadiran</option>
                                                                @foreach ($kehadiran as $data)
                                                                    <option value="{{$data->id}}">{{$data->ket}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12" hidden>
                                                        <div class="mb-1">
                                                            <label class="form-label" for="basicSelect">Pilih Kehadiran</label>
                                                            <select class="form-select" id="basicSelect" name="kode_pertemuan">
                                                                <option value="{{$kode_pertemuan}}"> {{$kode_pertemuan}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Kehadiran</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($absen as $data)
                                    <tr>
                                        <td>{{ $data->siswa->nama_siswa }}</td>
                                        <td><span
                                                class="badge rounded-pill me-1" style="background: #{{$data->kehadiran->color}}">{{ $data->kehadiran->ket }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                    <form action="{{ route('input-absen', ['id' => $data->id, 'kode_pertemuan' => $kode_pertemuan]) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- datas list ends -->
@endsection
