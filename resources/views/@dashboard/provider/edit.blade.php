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
                    <a href="{{ route('provider.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                    <a href="{{ route('provider.create') }}" class="btn btn-sm btn-success"><i class="bx bxs-book-add"></i> {{ trans('general.create_new') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('provider.provider') }}</h5>
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
                <form action="{{ route('provider.update', [$resource->uuid]) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">
                        @foreach(langs("short_name") as $lang)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="" for="display_name_{{ $lang }}">{{ trans('provider.display_name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('display_name_'.$lang) is-invalid @enderror "
                                           id="display_name_{{ $lang }}"
                                           type="text" name="display_name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('provider.display_name') }} {{ $lang }} .." value="{{ getTrans($resource->display_name, $lang) }}">

                                    @error('display_name_'.$lang)
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
                                <label class="" for="name">{{ trans('provider.name') }}</label>
                                <input class="form-control @error('name') is-invalid @enderror "
                                       id="name"
                                       type="text" name="name"
                                       placeholder="{{ trans('general.enter') }} {{ trans('provider.name') }} .." value="{{ $resource->name }}">

                                @error('name')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="class">{{ trans('provider.class') }}</label>
                                <input class="form-control @error('class') is-invalid @enderror "
                                       id="class"
                                       type="text" name="class"
                                       placeholder="{{ trans('general.enter') }} {{ trans('provider.class') }} .." value="{{ $resource->class }}">

                                @error('class')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="color">{{ trans('provider.color') }}</label>
                                <input class="form-control @error('color') is-invalid @enderror "
                                       id="color"
                                       type="color" name="color"
                                       placeholder="{{ trans('general.enter') }} {{ trans('provider.color') }} .." value="{{ $resource->color }}">

                                @error('color')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        @foreach(langs("short_name") as $lang)
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
