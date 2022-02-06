@extends('@dashboard._layouts.master')

@section('title') {{ trans('home.page_title') }} @endsection

@section('content')

    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('home.page_title') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('home.page_title') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--    <section id="widgets-Statistics">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xl-2 col-md-4 col-sm-6">--}}
{{--                <div class="card text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">--}}
{{--                            <i class="bx bx-shopping-bag font-medium-5"></i>--}}
{{--                        </div>--}}
{{--                        <p class="text-muted mb-0 line-ellipsis">{{ trans('home.num_of_terms') }}</p>--}}
{{--                        <h2 class="mb-0">{{ \App\Models\Term::count() }}</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                <div class="avatar-content">
                                    <i class="bx bx-user text-primary font-medium-2"></i>
                                </div>
                            </div>
                            <div class="total-amount">
                                <h5 class="mb-0">{{ \App\Models\User::count() }}</h5>
                                <small class="text-muted">{{ trans('home.users') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                <div class="avatar-content">
                                    <i class="bx bx-user text-primary font-medium-2"></i>
                                </div>
                            </div>
                            <div class="total-amount">
                                <h5 class="mb-0">{{ \App\Models\Action::count() }}</h5>
                                <small class="text-muted">{{ trans('home.actions') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                <div class="avatar-content">
                                    <i class="bx bx-user text-primary font-medium-2"></i>
                                </div>
                            </div>
                            <div class="total-amount">
                                <h5 class="mb-0">{{ \App\Models\Screen::count() }}</h5>
                                <small class="text-muted">{{ trans('home.screens') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                                <div class="avatar-content">
                                    <i class="bx bx-user text-primary font-medium-2"></i>
                                </div>
                            </div>
                            <div class="total-amount">
                                <h5 class="mb-0">{{ \App\Models\Group::count() }}</h5>
                                <small class="text-muted">{{ trans('home.groups') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
