@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit {{$guru->nama_guru}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="/show-data-guru/{{ $guru->id }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Nomor Induk</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{ $guru->no_induk }}" type="text" id="first-name"
                                                class="form-control text-lowercase" name="no_induk"
                                                placeholder="Mata Pelajaran" />
                                            @error('no_induk')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Nama Guru</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{ $guru->nama_guru }}" type="text" id="first-name"
                                                class="form-control text-lowercase" name="nama_guru"
                                                placeholder="Mata Pelajaran" />
                                            @error('nama_guru')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Jenis Kelamin</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-select mb-1" id="basicSelect" name="jk">
                                                <option  value="{{$guru->jk}}" selected>{{$guru->jk}}</option>
                                                <option value="pria">Pria</option>
                                                <option value="wanita">Wanita</option>
                                            </select>
                                            @error('jk')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Nomor Telepon</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{ $guru->telp }}" type="text" id="first-name"
                                                class="form-control text-lowercase" name="telp"
                                                placeholder="Nomor Telepon" />
                                            @error('telp')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Mata Pelajaran</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-select mb-1" id="basicSelect" name="kode_pelajaran">
                                                <option  value="{{$guru->kode_pelajaran}}" selected>{{$pelajaran[$guru->kode_pelajaran]->mata_pelajaran}}</option>
                                                @foreach ($pelajaran as $data)
                                                @if ($data->id != $guru->kode_pelajaran)
                                                <option  value="{{$data->id}}" selected>{{$data->mata_pelajaran}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                            @error('kode_pelajaran')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Alamat</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{ $guru->alamat }}" type="text" id="first-name"
                                                class="form-control text-lowercase" name="alamat"
                                                placeholder="Tempat Lahir" />
                                            @error('alamat')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-1">
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
