@extends('layouts.app')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Mata Pelajaran</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('input-pelajaran')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1 row">
                                        <div class="col-sm-3">
                                            <label class="col-form-label" for="first-name">Mata Pelajaran</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{old('mata_pelajaran')}}"  type="text" id="first-name" class="form-control text-lowercase" name="mata_pelajaran"
                                                placeholder="Mata Pelajaran" />
                                                @error('mata_pelajaran')
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
                                            <label class="col-form-label" for="email-id">Jumlah Menit</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input value="{{old('jumlah_jam')}}"  type="number" id="email-id" class="form-control" name="jumlah_jam"
                                                placeholder="Jumlah Menit" />
                                                @error('jumlah_jam')
                                                <div class="text-danger mt-1">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-9 offset-sm-3">
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
