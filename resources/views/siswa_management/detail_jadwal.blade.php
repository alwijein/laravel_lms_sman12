@extends('layouts.app')

@section('content')
    <section id="knowledge-base-search">
        <div class="row">
            <div class="col-12">
                <div class="card knowledge-base-bg text-center"
                    style="background-image: url('../../../app-assets/images/banner/banner.png')">
                    <div class="card-body">
                        <h2 class="text-primary mb-3">Jadwal Mata Pelajaran Kelas {{$title}}</h2>
                        <img src="{{ asset('app-assets/images/illustrator/date-illustrator.svg') }}" width="200rem"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Knowledge base Jumbotron -->

    <!-- Knowledge base -->
    <section id="knowledge-base-content">
        <div class="row kb-search-content-info match-height">
            <!-- begin card -->
            @foreach ($hari as $data)
                <div class="col-md-6 col-sm-8 col-12 kb-search-content">
                    <div class="card">
                        <div class="card-body ">
                            <h4 class="mb-2 text-uppercase text-center">{{ $data->nama_hari }}</h4>
                            @switch($data->id)
                                @case(1)
                                    @foreach ($senin as $item)
                                        <div class="employee-task d-flex justify-content-between align-items-center mb-1">
                                            <div class="d-flex flex-row">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 ">{{ $item->pelajaran->mata_pelajaran }}</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="text-muted me-75">{{ $item->guru->nama_guru?? "" }}</small>
                                                <div class="employee-task-chart-primary-1"></div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="text-muted me-75">({{ $item->jam }})</small>
                                                <div class="employee-task-chart-primary-1"></div>
                                            </div>
                                            @if (Auth::user()->role == 'Admin')
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">

                                                    <a class="dropdown-item" href="{{ route('edit-jadwal', ['id' => $item->id]) }}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <form action="{{ route('delete-jadwal', ['id' => $item->id]) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @break
                                @case(2)
                                    @foreach ($selasa as $item)
                                        <div class="employee-task d-flex justify-content-between align-items-center mb-1">
                                            <div class="d-flex flex-row">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 ">{{ $item->pelajaran->mata_pelajaran }}</h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="text-muted me-75">{{ $item->guru->nama_guru?? "" }}</small>
                                                <div class="employee-task-chart-primary-1"></div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="text-muted me-75">({{ $item->jam }})</small>
                                                <div class="employee-task-chart-primary-1"></div>
                                            </div>
                                            @if (Auth::user()->role == 'Admin')
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">

                                                    <a class="dropdown-item" href="{{ route('edit-jadwal', ['id' => $item->id]) }}">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <form action="{{ route('delete-jadwal', ['id' => $item->id]) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="submit">
                                                            <i data-feather="trash" class="me-50"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @break


                                @default
                            @endswitch
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
