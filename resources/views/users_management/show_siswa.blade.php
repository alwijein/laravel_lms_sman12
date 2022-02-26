@extends('layouts.app')

@section('content')
    <section class="app-user-list">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Daftar Siswa</h4>
                        <div class="form-modal-ex">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                              Tambah Siswa
                            </button>
                            <!-- Modal -->
                            <div
                              class="modal fade text-start"
                              id="inlineForm"
                              tabindex="-1"
                              aria-labelledby="myModalLabel33"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Tambahkan Akun Siswa</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form action="{{route('show-siswa')}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                      <label>Nama: </label>
                                      <div class="mb-1">
                                        <input type="text" name="name" placeholder="Masukkan Nama" class="form-control" />
                                      </div>
                                      @error('name')
                                      <div class="text-danger mt-1">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                      <label>Email: </label>
                                      <div class="mb-1">
                                        <input type="text" name="email" placeholder="Masukkan Alamat Email" class="form-control" />
                                      </div>
                                      @error('email')
                                      <div class="text-danger mt-1">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                      <label hidden>Status: </label>
                                      <div class="mb-1">
                                        <input hidden type="text" value="Siswa" name="role" placeholder="Email Address" class="form-control" />
                                      </div>
                                      <label>Password: </label>
                                      <div class="mb-1">
                                        <input type="password" name="password" placeholder="Masukkan Password" class="form-control" />
                                      </div>
                                      @error('password')
                                      <div class="text-danger mt-1">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Daftar</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td><span
                                                class="badge rounded-pill badge-light-primary me-1">{{ $user->role }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('edit-siswa', ['id'=>$user->id]) }}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <form action="{{ route('delete', ['id'=>$user->id]) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- users list ends -->
@endsection
