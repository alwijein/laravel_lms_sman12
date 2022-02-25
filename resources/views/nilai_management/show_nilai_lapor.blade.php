@extends('layouts.app')


@section('content')
    <form class="faq-search-input row mb-3" action="{{ route('show-nilai-lapor-siswa') }}" method="post">
        @csrf
        <div class="input-group input-group-merge col">
            <div class="input-group-text">
                <i data-feather="search"></i>
            </div>
            <input type="text" value="{{old('no_induk')}}" class="form-control" placeholder="Masukkan Nomor Induk Siswa"  name="no_induk"/>
        </div>
        <div class="input-group input-group-merge col">
            <div class="input-group-text">
                <i data-feather="search"></i>
            </div>
            <select class="form-select" id="basicSelect" name="semester">
                <option disabled selected>Pilih Semester</option>
                <option value="1(Ganjil)">1(Ganjil)</option>
                <option value="2(Genap)">2(Genap)</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary col-2"> Cari </button>
    </form>

    @yield('component')
@endsection
