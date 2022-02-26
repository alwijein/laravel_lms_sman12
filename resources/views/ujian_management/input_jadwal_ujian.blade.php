@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masukkan Jadwal Ujian</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route('input-ujian')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="fp-default">Tentukan Tanggal</label>
                                    <input name="tanggal" type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                    @error('tanggal')
                                      <div class="text-danger mt-1">
                                          {{ $message }}
                                      </div>
                                     @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Hari</label>
                                        <select class="form-select" id="basicSelect" name="hari">
                                            <option disabled selected>Pilih Hari</option>
                                            @foreach ($hari as $data)
                                            <option value="{{$data->id}}">{{$data->nama_hari}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('hari')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                   @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Jam Mulai</label>
                                        <input name="jamStart" type="text" id="fp-time" class="form-control flatpickr-time text-start" placeholder="HH:MM" />
                                    </div>
                                    @error('jamStart')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                   @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Jam Berakhir</label>
                                        <input name="jamEnd" type="text" id="fp-time" class="form-control flatpickr-time text-start" placeholder="HH:MM" />
                                    </div>
                                    @error('jamEnd')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                   @enderror
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
                                    @error('matapelajaran')
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
