@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit {{$siswa->nama_siswa}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="/show-data-siswa/{{ $siswa->id }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Nomor Induk</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{ $siswa->no_induk }}" type="text" id="first-name"
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
                                            <label class="col-form-label" for="first-name">Nama Siswa</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{ $siswa->nama_siswa }}" type="text" id="first-name"
                                                class="form-control text-lowercase" name="nama_siswa"
                                                placeholder="Mata Pelajaran" />
                                            @error('nama_siswa')
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
                                                <option  value="{{$siswa->jk}}" selected>{{$siswa->jk}}</option>
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
                                            <input value="{{ $siswa->telp }}" type="text" id="first-name"
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
                                            <label class="col-form-label" for="first-name">Kelas</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-select mb-1" id="basicSelect" name="kode_kelas">
                                                <option  value="{{$siswa->kode_kelas}}" selected>{{$kelas[$siswa->kode_kelas]->kelas}}</option>
                                                @foreach ($kelas as $data)
                                                @if ($data->id != $siswa->kode_kelas)
                                                <option  value="{{$data->id}}" selected>{{$data->kelas}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                            @error('kode_kelas')
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
                                            <input value="{{ $siswa->alamat }}" type="text" id="first-name"
                                                class="form-control text-lowercase" name="alamat"
                                                placeholder="Alamat" />
                                            @error('alamat')
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
                                            <label class="col-form-label" for="first-name">Tempat Lahir</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{ $siswa->tmp_lahir }}" type="text" id="first-name"
                                                class="form-control text-lowercase" name="tmp_lahir"
                                                placeholder="Tempat Lahir" />
                                            @error('tmp_lahir')
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
                                            <label class="col-form-label" for="first-name">Tanggal Lahir</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input name="tgl_lahir" value="{{$siswa->tgl_lahir}}" type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                            @error('tgl_lahir')
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
