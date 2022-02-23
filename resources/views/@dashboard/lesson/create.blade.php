@extends('@dashboard._layouts.master')

@section('title') {{ trans('lesson.page_title') }} @endsection

@section('post_head')
    <script src="{{ url('assets_dashboard/assets-custom/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <div class="float-right">
                    <a href="{{ route('lesson.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('lesson.create') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('lesson.create') }}</li>
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
                <form action="{{ route('lesson.store') }}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="session_uuid">{{ trans('lesson.session') }}</label>
                                <select class="select2 form-control @error('session_uuid') is-invalid @enderror" name="session_uuid" id="session_uuid">
                                    <option value="choose">{{ trans('general.choose') }}</option>
                                    @foreach($sessions as $session)
                                        <option value="{{$session->uuid}}">{{ getTrans($session->name, lang()) }}</option>
                                    @endforeach
                                </select>

                                @error('session_uuid')
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
                                <input type="checkbox" name="is_published" class="custom-control-input" value="1" id="is_published">
                                <label class="custom-control-label mr-1" for="is_published"></label>
                            </div>
                        </div>

                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="name_{{ $lang }}">{{ trans('lesson.name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('name_'.$lang) is-invalid @enderror "
                                           id="name_{{ $lang }}"
                                           type="text" name="name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('session.name') }} {{ $lang }} .." value="{{ old('name_' . $lang) }}">

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

