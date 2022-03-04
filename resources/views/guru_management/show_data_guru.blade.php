@extends('layouts.app')

@php
    $count = 1;
@endphp

@section('content')
    <section class="app-user-list">

        <form class="faq-search-input row mb-3" action="{{ route('show-data-guru') }} " method="get">
            <div class="input-group input-group-merge col">
                <div class="input-group-text">
                    <i data-feather="search"></i>
                </div>
                <input type="text" value="{{old('nomor')}}" class="form-control" placeholder="Masukkan Nomor Induk Guru"  name="nomor"/>
            </div>
            <button type="submit" class="btn btn-primary col-2"> Cari </button>
        </form>


        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Guru</h4>
                        @if (Auth::user()->role == 'Admin')

                        <div class="form-modal-ex">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#inlineForm">
                                Tambah Guru
                            </button>
                            <!-- Modal -->
                            <div class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Tambahkan Data Guru</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('show-data-guru') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <label>Nomor Induk: </label>
                                                <div class="mb-1">
                                                    <input type="number" name="no_induk" placeholder="Masukkan Nomor Induk"
                                                        class="form-control" />
                                                </div>
                                                @error('no_induk')
                                                    <div class="text-danger mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <label>Nama Guru: </label>
                                                <div class="mb-1">
                                                    <input type="text" name="nama_guru" placeholder="Masukkan Nama Guru"
                                                        class="form-control" />
                                                </div>
                                                @error('nama_guru')
                                                    <div class="text-danger mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <label>Jenis Kelamin: </label>
                                                <select class="form-select mb-1" id="basicSelect" name="jk">
                                                    <option disabled selected>Pilih Jenis Kelamin</option>
                                                    <option value="pria">Pria</option>
                                                    <option value="wanita">Wanita</option>
                                                </select>
                                                @error('jk')
                                                    <div class="text-danger mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <label>Nomor Telepon: </label>
                                                <div class="mb-1">
                                                    <input type="number" name="telp" placeholder="Masukkan Nomor Telepon"
                                                        class="form-control" />
                                                </div>
                                                @error('telp')
                                                    <div class="text-danger mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <label>Mata Pelajaran: </label>
                                                <select class="form-select mb-1" id="basicSelect" name="kode_pelajaran">
                                                    <option disabled selected>Pilih Jenis Mata Pelajaran</option>
                                                    @foreach ($pelajaran as $data)
                                                    <option value="{{$data->id}}">{{$data->mata_pelajaran}}</option>

                                                    @endforeach
                                                </select>
                                                @error('kode_pelajaran')
                                                    <div class="text-danger mt-1">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <label>Alamat: </label>
                                                <div class="mb-1">
                                                    <input type="text" name="alamat" placeholder="Masukkan Alamat"
                                                        class="form-control" />
                                                </div>
                                                @error('alamat')
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
                        @endif

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Telpon</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Alamat</th>
                                    @if (Auth::user()->role == 'Admin')
                                    <th>aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $data)
                                    <tr>
                                        <td>{{ $data->no_induk}}</td>
                                        <td>{{ $data->nama_guru }}</td>
                                        <td><span
                                            class="badge rounded-pill {{ $data->jk == 'wanita' ? 'badge-light-danger' : 'badge-light-primary' }}  me-1">{{ $data->jk }}</span>
                                        </td>
                                        <td>{{ $data->telp }}</td>
                                        <td>
                                            {{ $data->pelajaran->mata_pelajaran }}
                                        </td>
                                        <td>
                                            {{ $data->alamat }}
                                        </td>

                                        @if (Auth::user()->role == 'Admin')
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('edit-data-guru', ['id'=>$data->id]) }}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <form action="{{ route('delete-data-guru', ['id'=>$data->id]) }}" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="dropdown-item" type="submit">
                                                                <i data-feather="trash" class="me-50"></i>
                                                                <span>Delete</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        @endif
                                    </tr>
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
