@extends('@dashboard._layouts.master')

@section('title') {{ trans('testimonial.page_title') }} @endsection

@section('post_head')
    <script src="{{ url('assets_dashboard/assets-custom/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <div class="float-right">
                    <a href="{{ route('testimonial.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('testimonial.create') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('testimonial.create') }}</li>
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
                <form action="{{ route('testimonial.store') }}" method="post">
                    @csrf

                    <div class="row">
                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="" for="name_{{ $lang }}">{{ trans('testimonial.name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('name_'.$lang) is-invalid @enderror "
                                           id="name_{{ $lang }}"
                                           type="text" name="name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('testimonial.name') }} {{ $lang }} .." value="{{ old('name_' . $lang) }}">

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
                                    <label class="" for="role_{{ $lang }}">{{ trans('testimonial.role') }} ({{ $lang }})</label>
                                    <input class="form-control @error('role_'.$lang) is-invalid @enderror "
                                           id="role_{{ $lang }}"
                                           type="text" name="role_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('testimonial.role') }} {{ $lang }} .." value="{{ old('role_' . $lang) }}">

                                    @error('role_'.$lang)
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-6 mb-2">
                                <label for="details_{{ $lang }}">{{ trans('testimonial.details') }} ({{ $lang }})</label>

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

                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="" for="">{{ trans('testimonial.is_active') }}</label>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline mb-1">
                                <input type="checkbox" name="is_active" class="custom-control-input" value="1" id="is_active">
                                <label class="custom-control-label mr-1" for="is_active"></label>
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

