@extends('@dashboard._layouts.master')

@section('title') {{ trans('general.edit') }} {{ getTrans($resource->name, lang()) }} @endsection

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
                    <a href="{{ route('testimonial.create') }}" class="btn btn-sm btn-success"><i class="bx bxs-book-add"></i> {{ trans('general.create_new') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('testimonial.testimonial') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ getTrans($resource->name, lang()) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit -->
    <section>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><b>{{ trans('general.edit') }} {{ getTrans($resource->name, lang()) }}</b></h4>
            </div>
            <div class="card-body">
                <form action="{{ route('testimonial.update', [$resource->uuid]) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">
                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="" for="name_{{ $lang }}">{{ trans('testimonial.name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('name_'.$lang) is-invalid @enderror "
                                           id="name_{{ $lang }}"
                                           type="text" name="name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('testimonial.name') }} {{ $lang }} .." value="{{ getTrans($resource->name, $lang) }}">

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
                                    <label class="" for="speciality_{{ $lang }}">{{ trans('testimonial.speciality') }} ({{ $lang }})</label>
                                    <input class="form-control @error('speciality_'.$lang) is-invalid @enderror "
                                           id="speciality_{{ $lang }}"
                                           type="text" name="speciality_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('testimonial.speciality') }} {{ $lang }} .." value="{{ getTrans($resource->speciality, $lang) }}">

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
                                <label class="" for="phone">{{ trans('testimonial.phone') }}</label>
                                <input class="form-control @error('phone') is-invalid @enderror "
                                       id="phone"
                                       type="text" name="phone"
                                       placeholder="{{ trans('general.enter') }} {{ trans('testimonial.phone') }} .." value="{{ $resource->phone }}">

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
                                <label class="" for="email">{{ trans('testimonial.email') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror "
                                       id="email"
                                       type="email" name="email"
                                       placeholder="{{ trans('general.enter') }} {{ trans('testimonial.email') }} .." value="{{ $resource->email }}">

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
                                <label class="" for="avatar">{{ trans('testimonial.avatar') }}</label>
                                <input class="form-control @error('avatar') is-invalid @enderror "
                                       id="avatar"
                                       type="text" name="avatar"
                                       placeholder="{{ trans('general.enter') }} {{ trans('testimonial.avatar') }} .." value="{{ $resource->avatar }}">

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
                                <label class="" for="">{{ trans('testimonial.is_default') }}</label>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline mb-1">
                                <input type="checkbox" name="is_active" class="custom-control-input" value="1" @if($resource->is_active == 1) checked @endif id="is_active">
                                <label class="custom-control-label mr-1" for="is_active"></label>
                                {{--                            <span>{{ trans('term.is_active') }}</span>--}}
                            </div>
                        </div>

                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-6">
                                <label for="details_{{ $lang }}">{{ trans('testimonial.details') }} ({{ $lang }})</label>

                                <textarea class="form-control @error('details_'.$lang) is-invalid @enderror "
                                          id="details_{{ $lang }}" name="details_{{ $lang }}"
                                          placeholder="Enter details_{{ $lang }} ..">{{ getTrans($resource->details, $lang) }}</textarea>

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
