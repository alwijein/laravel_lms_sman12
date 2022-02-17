@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masukkan Jadwal Pelajaran</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route('input-jadwal')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Hari</label>
                                        <select class="form-select" id="basicSelect" name="hari">
                                            <option disabled selected>Pilih Hari</option>
                                            <option value="senin">Senin</option>
                                            <option value="selasa">Selasa</option>
                                            <option value="rabu">Rabu</option>
                                            <option value="kamis">Kamis</option>
                                            <option value="jumat">Jumat</option>
                                            <option value="sabtu">Sabtu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Jam</label>
                                        <select class="form-select" id="basicSelect" name="jam">
                                            <option disabled selected>Pilih Jam</option>

                                            <option value="08:00 - 09:00">08:00 - 09:00</option>
                                            <option value="09:00 - 10:00">09:00 - 10:00</option>
                                            <option value="10:00 - 11:00">10:00 - 11:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Mata Pelajaran</label>
                                        <select class="form-select" id="basicSelect" name="matapelajaran">
                                            <option disabled selected>Pilih Mata Pelajaran</option>

                                            @foreach ($pelajaran as $matapelajaran)
                                                <option value="{{$matapelajaran->id}}">{{$matapelajaran->mata_pelajaran}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Guru</label>
                                        <select class="form-select" id="basicSelect" name="guru">
                                            <option disabled selected>Pilih Guru</option>

                                            @foreach ($guru as $namaguru)
                                                <option value="{{$namaguru->id}}" >{{$namaguru->nama_guru}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Kelas</label>
                                        <select class="form-select" id="basicSelect" name="kelas">
                                            <option disabled selected>Pilih Kelas</option>

                                            @foreach ($kelas as $kls)
                                                <option value="{{$kls->id}}">{{$kls->kelas}}</option>
                                            @endforeach
                                        </select>
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
