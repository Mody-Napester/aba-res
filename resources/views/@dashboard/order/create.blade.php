@extends('@dashboard._layouts.master')

@section('title') {{ trans('order.page_title') }} @endsection

@section('post_head')
    <script src="{{ url('assets_dashboard/assets-custom/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <div class="float-right">
                    <a href="{{ route('order.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('order.create') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('order.create') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Create -->
    <section>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><b>{{ trans('general.create_new') }}</b></h4>
            </div>
            <div class="card-body">
                <form action="{{ route('order.store') }}" method="post">
                    @csrf

                    <div class="row">
                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="" for="name_{{ $lang }}">{{ trans('order.name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('name_'.$lang) is-invalid @enderror "
                                           id="name_{{ $lang }}"
                                           type="text" name="name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('order.name') }} {{ $lang }} .." value="{{ old('name_' . $lang) }}">

                                    @error('name_'.$lang)
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="" for="speciality_{{ $lang }}">{{ trans('order.speciality') }} ({{ $lang }})</label>
                                    <input class="form-control @error('speciality_'.$lang) is-invalid @enderror "
                                           id="speciality_{{ $lang }}"
                                           type="text" name="speciality_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('order.speciality') }} {{ $lang }} .." value="{{ old('speciality_' . $lang) }}">

                                    @error('speciality_'.$lang)
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="phone">{{ trans('order.phone') }}</label>
                                <input class="form-control @error('phone') is-invalid @enderror "
                                       id="phone"
                                       type="text" name="phone"
                                       placeholder="{{ trans('general.enter') }} {{ trans('order.phone') }} .." value="{{ old('phone') }}">

                                @error('phone')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="email">{{ trans('order.email') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror "
                                       id="email"
                                       type="email" name="email"
                                       placeholder="{{ trans('general.enter') }} {{ trans('order.email') }} .." value="{{ old('email') }}">

                                @error('email')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="avatar">{{ trans('order.avatar') }}</label>
                                <input class="form-control @error('avatar') is-invalid @enderror "
                                       id="avatar"
                                       type="text" name="avatar"
                                       placeholder="{{ trans('general.enter') }} {{ trans('order.avatar') }} .." value="{{ old('avatar') }}">

                                @error('avatar')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="" for="">{{ trans('order.is_active') }}</label>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline mb-1">
                                <input type="checkbox" name="is_active" class="custom-control-input" value="1" id="is_active">
                                <label class="custom-control-label mr-1" for="is_active"></label>
                                {{--                            <span>{{ trans('term.is_active') }}</span>--}}
                            </div>
                        </div>

                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-6">
                                <label for="details_{{ $lang }}">{{ trans('order.details') }} ({{ $lang }})</label>

                                <textarea class="form-control @error('details_'.$lang) is-invalid @enderror "
                                          id="details_{{ $lang }}" name="details_{{ $lang }}"
                                          placeholder="Enter details_{{ $lang }} .."></textarea>

                                @error('details_'.$lang)
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <script>
                                    CKEDITOR.replace( 'details_{{ $lang }}' );
                                </script>
                            </div>
                        @endforeach

                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-save"></i> {{ trans('general.save') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

@endsection

