@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Masukkan Nilai Prestasi Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{ route('detail-prestasi', ['id' => $kode_kelas]) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label class="form-label" for="fp-default">Pilih Semester</label>
                                    <select class="form-select" id="basicSelect" name="semester">
                                        <option disabled selected>Pilih Semester</option>
                                        <option value="1(Ganjil)">1(Ganjil)</option>
                                        <option value="2(Genap)">2(Genap)</option>
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
                                        <label class="form-label" for="basicSelect">Jenis Kegiatan</label>
                                        <input value="{{ old('jenisKegiatan') }}" type="text" id="first-name"
                                            class="form-control " name="jenisKegiatan"
                                            placeholder="Masukkan Jenis Kegiatan" />
                                    </div>
                                    @error('jenisKegiatan')
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
                                        name="keterangan"
                                      ></textarea>
                                      <label for="textarea-counter">Keterangan</label>
                                    </div>
                                    <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 255 </small>
                                    @error('keterangan')
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
