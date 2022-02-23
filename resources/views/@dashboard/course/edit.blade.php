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
                    <a href="{{ route('course.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                    <a href="{{ route('course.create') }}" class="btn btn-sm btn-success"><i class="bx bxs-book-add"></i> {{ trans('general.create_new') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('course.course') }}</h5>
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
                <form action="{{ route('course.update', [$resource->uuid]) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="instructor_uuid">{{ trans('course.instructor') }}</label>
                                <select class="select2 form-control @error('instructor_uuid') is-invalid @enderror" name="instructor_uuid" id="instructor_uuid">
                                    <option value="choose">{{ trans('general.choose') }}</option>
                                    @foreach($instructors as $instructor)
                                        <option @if($resource->instructor_id == $instructor->id) selected @endif value="{{$instructor->uuid}}">{{ getTrans($instructor->name, lang()) }}</option>
                                    @endforeach
                                </select>

                                @error('instructor_uuid')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="price">{{ trans('course.price') }}</label>
                                <input class="form-control @error('price') is-invalid @enderror "
                                       id="price"
                                       type="text" name="price"
                                       placeholder="{{ trans('general.enter') }} {{ trans('course.price') }} .." value="{{ $resource->price }}">

                                @error('price')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="time_frame">{{ trans('course.time_frame') }}</label>
                                <input class="form-control @error('time_frame') is-invalid @enderror "
                                       id="time_frame"
                                       type="number" name="time_frame"
                                       placeholder="{{ trans('general.enter') }} {{ trans('course.time_frame') }} .." value="{{ $resource->time_frame }}">

                                @error('time_frame')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        @foreach(langs() as $lang)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="name_{{ $lang }}">{{ trans('course.name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('name_'.$lang) is-invalid @enderror "
                                           id="name_{{ $lang }}"
                                           type="text" name="name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('course.name') }} {{ $lang }} .." value="{{ getTrans($resource->name, $lang) }}">

                                    @error('name_'.$lang)
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="media_banner_uuid">{{ trans('course.media_banner') }}</label>
                                <select class="select2 form-control @error('media_banner_uuid') is-invalid @enderror" name="media_banner_uuid" id="media_banner_uuid">
                                    <option value="choose">{{ trans('general.choose') }}</option>
                                    @foreach($medias as $media)
                                        <option value="{{$media->uuid}}">
                                            {{ $media->file_name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('media_banner_uuid')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="media_image_uuid">{{ trans('course.media_image') }}</label>
                                <select class="select2 form-control @error('media_image_uuid') is-invalid @enderror" name="media_image_uuid" id="media_image_uuid">
                                    <option value="choose">{{ trans('general.choose') }}</option>
                                    @foreach($medias as $media)
                                        <option value="{{$media->uuid}}">
                                            {{ $media->file_name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('media_image_uuid')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-1">
                                <label class="" for="is_published">{{ trans('general.is_published') }}</label>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline mb-1">
                                <input type="checkbox" name="is_published" class="custom-control-input" @if($resource->is_published == 1) checked @endif value="1" id="is_published">
                                <label class="custom-control-label mr-1" for="is_published"></label>
                            </div>
                        </div>

                        @foreach(langs() as $lang)
                            <div class="col-md-6 mb-2">
                                <label for="short_details_{{ $lang }}">{{ trans('course.short_details') }} ({{ $lang }})</label>

                                <textarea class="form-control @error('short_details_'.$lang) is-invalid @enderror "
                                          id="short_details_{{ $lang }}" name="short_details_{{ $lang }}"
                                          placeholder="{{ trans('general.enter') }} {{ trans('course.short_details') }} {{ $lang }} ..">{{ getTrans($resource->short_details, $lang) }}</textarea>

                                @error('short_details_'.$lang)
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <script>
                                    CKEDITOR.replace( 'short_details_{{ $lang }}' );
                                </script>
                            </div>
                        @endforeach

                        @foreach(langs() as $lang)
                            <div class="col-md-6">
                                <label for="details_{{ $lang }}">{{ trans('course.details') }} ({{ $lang }})</label>

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
