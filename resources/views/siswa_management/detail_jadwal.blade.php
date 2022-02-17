@extends('layouts.app')

@section('content')
    <section id="knowledge-base-search">
        <div class="row">
            <div class="col-12">
                <div class="card knowledge-base-bg text-center"
                    style="background-image: url('../../../app-assets/images/banner/banner.png')">
                    <div class="card-body">
                        <h2 class="text-primary mb-3">Jadwal Mata Pelajaran Kelas XII</h2>
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
            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="mb-2">Senin</h4>
                        @foreach ($senin as $item)
                            <div class="employee-task d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex flex-row">
                                    <div class="my-auto">
                                        <h6 class="mb-0">{{ $item->pelajaran->mata_pelajaran }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">{{ $item->jam }}</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="mb-2">Selasa</h4>
                        @foreach ($selasa as $item)
                            <div class="employee-task d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex flex-row">
                                    <div class="my-auto">
                                        <h6 class="mb-0">{{ $item->pelajaran->mata_pelajaran }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">{{ $item->jam }}</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="mb-2">Rabu</h4>
                        @foreach ($rabu as $item)
                            <div class="employee-task d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex flex-row">
                                    <div class="my-auto">
                                        <h6 class="mb-0">{{ $item->pelajaran->mata_pelajaran }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">{{ $item->jam }}</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="mb-2">Kamis</h4>
                        @foreach ($kamis as $item)
                            <div class="employee-task d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex flex-row">
                                    <div class="my-auto">
                                        <h6 class="mb-0">{{ $item->pelajaran->mata_pelajaran }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">{{ $item->jam }}</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="mb-2">Jumat</h4>
                        @foreach ($jumat as $item)
                            <div class="employee-task d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex flex-row">
                                    <div class="my-auto">
                                        <h6 class="mb-0">{{ $item->pelajaran->mata_pelajaran }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">{{ $item->jam }}</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="mb-2">Sabtu</h4>
                        @foreach ($sabtu as $item)
                            <div class="employee-task d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex flex-row">
                                    <div class="my-auto">
                                        <h6 class="mb-0">{{ $item->pelajaran->mata_pelajaran }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">{{ $item->jam }}</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
