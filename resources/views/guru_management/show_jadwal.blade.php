@extends('layouts.app')


@section('content')
    <form class="faq-search-input row mb-3" action="{{ route('show-jadwal-guru') }}">
        <div class="input-group input-group-merge col">
            <div class="input-group-text">
                <i data-feather="search"></i>
            </div>
            <input type="text" value="{{old('nama_guru')}}" class="form-control" placeholder="Masukkan Nama Lengkap Guru"  name="nama_guru"/>
        </div>
        <button type="submit" class="btn btn-primary col-2"> Cari </button>
    </form>

    @yield('component')
@endsection
