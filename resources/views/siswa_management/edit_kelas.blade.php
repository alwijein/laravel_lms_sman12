@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit {{$kelas->kelas}}</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="/show-kelas/{{ $kelas->id }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1 row">
                                        <div class="col-sm-2">
                                            <label class="col-form-label" for="first-name">Kelas</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{ $kelas->kelas }}" type="text" id="first-name"
                                                class="form-control text-lowercase" name="kelas"
                                                placeholder="Masukkan Kelas" />
                                            @error('kelas')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1 row">
                                        <div class="col-sm-2">
                                            <label class="col-form-label" for="first-name">Wali Kelas</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-select mb-1" id="basicSelect" name="kode_guru">
                                                <option  disabled value="{{$kelas->guru->name}}" selected>{{$kelas->guru->name}}</option>
                                                @foreach ($waliKelas as $data)
                                                <option value="{{$data->id}}">{{$data->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('kode_guru')
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
