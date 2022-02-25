@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masukkan Nilai Ujian Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{ route('detail-nilai-ujian', ['id' => $kode_kelas]) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="fp-default">Pilih Jenis Ujian</label>
                                    <select class="form-select" id="basicSelect" name="semester">
                                        <option disabled selected>Pilih Semester</option>
                                        <option value="semester 1">Semester 1</option>
                                        <option value="semester 2">Semester 2</option>
                                    </select>
                                    @error('semester')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Siswa</label>
                                        <select class="form-select" id="basicSelect" name="kode_siswa">
                                            <option disabled selected>Pilih Siswa</option>
                                            @foreach ($siswa as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_siswa }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('kode_siswa')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Mata Pelajaran</label>
                                        <select class="form-select" id="basicSelect" name="kode_pelajaran">
                                            <option disabled selected>Pilih Mata Pelajaran</option>
                                            @foreach ($pelajaran as $data)
                                                <option value="{{ $data->id }}">{{ $data->mata_pelajaran }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('kode_pelajaran')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Guru Pengajar</label>
                                        <select class="form-select" id="basicSelect" name="kode_guru">
                                            <option disabled selected>Pilih Mata Pelajaran</option>
                                            @foreach ($guru as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_guru }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('kode_guru')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Nilai</label>
                                        <input value="{{ old('nilai') }}" type="number" id="first-name"
                                            class="form-control text-lowercase" name="nilai"
                                            placeholder="Masukkan Nilai Siswa" />
                                    </div>
                                    @error('nilai')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
