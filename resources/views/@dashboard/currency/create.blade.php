@extends('@dashboard._layouts.master')

@section('title') {{ trans('currency.page_title') }} @endsection

@section('post_head')
    <script src="{{ url('assets_dashboard/assets-custom/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <div class="float-right">
                    <a href="{{ route('currency.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('currency.create') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('currency.create') }}</li>
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
                <form action="{{ route('currency.store') }}" method="post">
                    @csrf

                    <div class="row">
                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="name_{{ $lang }}">{{ trans('currency.name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('name_'.$lang) is-invalid @enderror "
                                           id="name_{{ $lang }}"
                                           type="text" name="name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('currency.name') }} {{ $lang }} .." value="{{ old('name_' . $lang) }}">

                                    @error('name_'.$lang)
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
                                <label class="" for="code">{{ trans('currency.code') }}</label>
                                <input class="form-control @error('code') is-invalid @enderror "
                                       id="code"
                                       type="text" name="code"
                                       placeholder="{{ trans('general.enter') }} {{ trans('currency.code') }} .." value="{{ old('code') }}">

                                @error('code')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="" for="symbol">{{ trans('currency.symbol') }}</label>
                                <input class="form-control @error('symbol') is-invalid @enderror "
                                       id="symbol"
                                       type="text" name="symbol"
                                       placeholder="{{ trans('general.enter') }} {{ trans('currency.symbol') }} .." value="{{ old('symbol') }}">

                                @error('symbol')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-save"></i> {{ trans('general.save') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

@endsection

