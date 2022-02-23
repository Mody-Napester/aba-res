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
                    <a href="{{ route('session.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                    <a href="{{ route('session.create') }}" class="btn btn-sm btn-success"><i class="bx bxs-book-add"></i> {{ trans('general.create_new') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('session.session') }}</h5>
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
                <form action="{{ route('session.update', [$resource->uuid]) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="course_uuid">{{ trans('session.course') }}</label>
                                <select class="select2 form-control @error('course_uuid') is-invalid @enderror" name="course_uuid" id="course_uuid">
                                    <option value="choose">{{ trans('general.choose') }}</option>
                                    @foreach($courses as $course)
                                        <option @if($resource->course_id == $course->id) selected @endif value="{{$course->uuid}}">{{ getTrans($course->name, lang()) }}</option>
                                    @endforeach
                                </select>

                                @error('course_uuid')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="" for="is_published">{{ trans('general.is_published') }}</label>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline mb-1">
                                <input type="checkbox" name="is_published" class="custom-control-input" @if($resource->is_published == 1) checked @endif value="1" id="is_published">
                                <label class="custom-control-label mr-1" for="is_published"></label>
                            </div>
                        </div>

                        @foreach(langs() as $lang)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="name_{{ $lang }}">{{ trans('session.name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('name_'.$lang) is-invalid @enderror "
                                           id="name_{{ $lang }}"
                                           type="text" name="name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('session.name') }} {{ $lang }} .." value="{{ getTrans($resource->name, $lang) }}">

                                    @error('name_'.$lang)
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
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
