@extends('layouts.app')


@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Daftar Kelas</h4>
                        <div class="form-modal-ex">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                                Tambah Kelas
                            </button>
                            <!-- Modal -->
                            <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Tambahkan Kelas</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('show-kelas') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <label>Kelas: </label>
                                                <div class="mb-1">
                                                    <input type="text" name="kelas" placeholder="Masukkan Kelas"
                                                        class="form-control" />
                                                </div>
                                                @error('kelas')
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
                                    <th>No</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $kls)
                                    <tr>
                                        <td>{{ $kls->id }}</td>

                                        <td>{{ $kls->kelas }}</td>

                                        <td>

                                            <form action="{{ route('delete-kelas', ['id' => $kls->id]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item" type="submit">
                                                    <i data-feather="trash" class="me-50"></i>
                                                    <span>Delete</span>
                                                </button>
                                            </form>
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
