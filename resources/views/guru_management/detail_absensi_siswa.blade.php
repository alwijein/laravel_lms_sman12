@extends('layouts.app')


@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Daftar Pertemuan Kelas {{$title->kelas}}</h4>
                        <div class="form-modal-ex">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                                Buat Pertemuan
                            </button>
                            <!-- Modal -->
                            <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Buat Pertemuan</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('input-pertemuan') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <label>Pertemuan: </label>
                                                <div class="mb-1">
                                                    <input type="text" name="pertemuan" placeholder="Masukkan Pertemuan ke Berapa"
                                                        class="form-control" />
                                                </div>
                                                @error('pertemuan')
                                                    <div class="text-danger mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                            <div class="modal-body">
                                                <label>Tanggal: </label>
                                                <div class="mb-1">
                                                    <input name="tanggal" value="{{old('tanggal')}}" type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                                </div>
                                                @error('tanggal')
                                                    <div class="text-danger mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                            <div class="modal-body" hidden>
                                                <label>Tanggal: </label>
                                                <div class="mb-1">
                                                    <input type="text" value="{{$id_kelas}}" name="kode_kelas" placeholder="Pilih Kode Kelas"
                                                        class="form-control" />
                                                </div>
                                                @error('kode_kelas')
                                                    <div class="text-danger mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

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
                                    <th>Pertemuan</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pertemuan as $data)
                                    <tr>
                                        <td>{{ $data->pertemuan }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('absensi-siswa', ['id'=>$id_kelas, 'kode_pertemuan' => $data->id]) }}">
                                                        <i data-feather="check" class="me-50"></i>
                                                        <span>Absen</span>
                                                    </a>
                                                    <form action="{{ route('delete-absen', ['id'=>$data->id]) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </form>
                                                </div>
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
    <!-- klss list ends -->
@endsection
