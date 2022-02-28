@extends('layouts.app')

@section('content')
<section id="page-account-settings">
    <div class="row">
      <!-- left menu section -->
      <div class="col-md-3 mb-2 mb-md-0">
        <ul class="nav nav-pills flex-column nav-left">
          <!-- general -->
          <li class="nav-item">
            <a
              class="nav-link active"
              id="account-pill-general"
              data-bs-toggle="pill"
              href="#account-vertical-general"
              aria-expanded="true"
            >
              <i data-feather="user" class="font-medium-3 me-1"></i>
              <span class="fw-bold">General</span>
            </a>
          </li>
          <!-- change password -->
          <li class="nav-item">
            <a
              class="nav-link"
              id="account-pill-password"
              data-bs-toggle="pill"
              href="#account-vertical-password"
              aria-expanded="false"
            >
              <i data-feather="lock" class="font-medium-3 me-1"></i>
              <span class="fw-bold">Change Password</span>
            </a>
          </li>
        </ul>
      </div>
      <!--/ left menu section -->

      <!-- right content section -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <!-- general tab -->
              <div
                role="tabpanel"
                class="tab-pane active"
                id="account-vertical-general"
                aria-labelledby="account-pill-general"
                aria-expanded="true"
              >
                <!-- form -->
                <form class="validate-form mt-2" action="{{route('edit-general')}}" method="POST">
                    @method('put')
                    @csrf
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label" for="account-name">Nama</label>
                        <input
                          type="text"
                          class="form-control"
                          id="account-name"
                          name="name"
                          placeholder="Nama"
                          value="{{$user->name}}"
                        />
                        @error('name')
                                      <div class="text-danger mt-1">
                                          {{ $message }}
                                      </div>
                                  @enderror
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label" for="account-e-mail">E-mail</label>
                        <input
                          type="email"
                          class="form-control"
                          id="account-e-mail"
                          name="email"
                          placeholder="Email"
                          value="{{$user->email}}"
                        />
                        @error('email')
                                      <div class="text-danger mt-1">
                                          {{ $message }}
                                      </div>
                                  @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary mt-2 me-1">Save changes</button>
                      <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                    </div>
                  </div>
                </form>
                <!--/ form -->
              </div>
              <!--/ general tab -->

              <!-- change password -->
              <div
                class="tab-pane fade"
                id="account-vertical-password"
                role="tabpanel"
                aria-labelledby="account-pill-password"
                aria-expanded="false"
              >
                <!-- form -->
                <form class="validate-form" action="{{route('edit-password')}}" method="POST">
                    @method('put')
                    @csrf
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label" for="account-new-password">Password Baru</label>
                        <div class="input-group form-password-toggle input-group-merge">
                          <input
                            type="password"
                            id="account-new-password"
                            name="new_password"
                            class="form-control"
                            placeholder="New Password"
                          />
                          <div class="input-group-text cursor-pointer">
                            <i data-feather="eye"></i>
                          </div>
                        </div>
                        @error('new_password')
                                      <div class="text-danger mt-1">
                                          {{ $message }}
                                      </div>
                                  @enderror
                      </div>
                    </div>
                    <div class="col-12 col-sm-6">
                      <div class="mb-1">
                        <label class="form-label" for="account-retype-new-password">Ketik Ulang Password</label>
                        <div class="input-group form-password-toggle input-group-merge">
                          <input
                            type="password"
                            class="form-control"
                            id="account-retype-new-password"
                            name="confirm_new_password"
                            placeholder="New Password"
                          />
                          <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                          @error('confirm_new_password')
                          <div class="text-danger mt-1">
                              {{ $message }}
                          </div>
                      @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary me-1 mt-1">Save changes</button>
                      <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                    </div>
                  </div>
                </form>
                <!--/ form -->
              </div>
              <!--/ change password -->
            </div>
          </div>
        </div>
      </div>
      <!--/ right content section -->
    </div>
  </section>
@endsection
