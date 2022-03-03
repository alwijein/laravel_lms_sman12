@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Jadwal Pelajaran</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{ route('update-jadwal', ['id'=>$jadwal->id, 'kode_kelas'=> $jadwal->kelas->id])}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Hari</label>
                                        <select class="form-select" id="basicSelect" name="hari">
                                            <option value="{{$jadwal->hari->id}}">{{$jadwal->hari->nama_hari}}</option>
                                            @foreach ($hari as $data)
                                            @if ($jadwal->hari->nama_hari != $data->nama_hari)
                                            <option value="{{$data->id}}">{{$data->nama_hari}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Mata Pelajaran</label>
                                        <select class="form-select" id="basicSelect" name="matapelajaran">
                                            <option value="{{$jadwal->pelajaran->id}}">{{$jadwal->pelajaran->mata_pelajaran}}</option>

                                            @foreach ($pelajaran as $matapelajaran)
                                            @if ($jadwal->pelajaran->mata_pelajaran != $matapelajaran->mata_pelajaran)
                                            <option value="{{$matapelajaran->id}}">{{$matapelajaran->mata_pelajaran}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Jam Mulai</label>
                                        <input value="{{$jamStart}}" name="jamStart" type="text" id="fp-time" class="form-control flatpickr-time text-start" placeholder="HH:MM" />
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
                                        <input name="jamEnd" value="{{$jamEnd}}" type="text" id="fp-time" class="form-control flatpickr-time text-start" placeholder="HH:MM" />
                                    </div>
                                    @error('jamEnd')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                   @enderror
                                </div>
                                @if ($jadwal->kode_guru != null)
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Guru</label>
                                        <select class="form-select" id="basicSelect" name="guru">
                                            <option value="{{$jadwal->guru->id }}">{{$jadwal->guru->nama_guru}}</option>

                                            @foreach ($guru as $namaguru)
                                            @if ($jadwal->guru->nama_guru != $namaguru->nama_guru)
                                            <option value="{{$namaguru->id}}" >{{$namaguru->nama_guru}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endif

                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Pilih Kelas</label>
                                        <select class="form-select" id="basicSelect" name="kelas">
                                            <option value="{{$jadwal->kelas->id}}">{{$jadwal->kelas->kelas}}</option>

                                            @foreach ($kelas as $kls)
                                            @if ($jadwal->kelas->kelas != $kls->kelas)
                                            <option value="{{$kls->id}}">{{$kls->kelas}}</option>
                                            @endif
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
