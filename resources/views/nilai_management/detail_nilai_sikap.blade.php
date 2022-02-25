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
                        <form class="form" action="{{ route('detail-nilai-sikap', ['id' => $kode_kelas]) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="fp-default">Jenis Sikap</label>
                                    <select class="form-select" id="basicSelect" name="jenis_sikap">
                                        <option disabled selected>Pilih Jenis Sikap</option>
                                        <option value="spritual">Spritual</option>
                                        <option value="sosial">Sosial</option>
                                    </select>
                                    @error('jenis_sikap')
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
                                        <label class="form-label" for="basicSelect">Predikat</label>
                                        <input value="{{ old('nilai') }}" type="text" id="first-name"
                                            class="form-control " name="predikat"
                                            placeholder="Masukkan Predikat Sikap" />
                                    </div>
                                    @error('predikat')
                                        <div class="text-danger mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-floating mb-1 mt-1">
                                      <textarea
                                        data-length="255"
                                        class="form-control char-textarea"
                                        id="textarea-counter"
                                        rows="3"
                                        placeholder="Counter"
                                        style="height: 100px"
                                        name="desk"
                                      ></textarea>
                                      <label for="textarea-counter">Deskripsi</label>
                                    </div>
                                    <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 255 </small>
                                    @error('desk')
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
