@extends('layouts.app')

@section('content')
    <!-- Basic multiple Column Form section start -->

    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Akun Guru</h4>
                    </div>
                    <div class="card-body">
                        <form class="form"  action="/show-guru/{{$guru->id}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Nama</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Masukkan Nama Baru" value="{{$guru->name}}" name="name" />
                                    </div>
                                    @error('name')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Email</label>
                                        <input type="email" id="first-name-column" class="form-control"
                                            placeholder="Masukkan Email Baru" value="{{$guru->email}}" name="email" />
                                    </div>
                                    @error('email')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-column">Password</label>
                                        <input type="password" id="first-name-column" class="form-control"
                                            placeholder="Masukkan Password Baru" value="{{$guru->password}}"  name="password" />
                                    </div>
                                    @error('password')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Status</label>
                                        <select class="form-select mb-1" id="basicSelect" name="role">
                                            <option disabled selected>{{$guru->role}}</option>
                                            <option value="Guru">Guru</option>
                                            <option value="WaliKelas">Wali Kelas</option>
                                        </select>
                                    </div>
                                    @error('role')
                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-12 text-center">
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
