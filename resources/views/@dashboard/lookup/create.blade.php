@extends('@dashboard._layouts.master')

@section('title') {{ trans('lookup.page_title') }} @endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <div class="float-right">
                    <a href="{{ route('lookup.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('lookup.create') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('lookup.create') }}</li>
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
                <form action="{{ route('lookup.store') }}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="parent">{{ trans('lookup.parent') }}</label>

                                <select name="parent" class="select2 form-control @error('parent') is-invalid @enderror" required id="parent">
                                    <option value="0">{{ trans('lookup.no_parent') }}</option>
                                    @foreach($parents as $parent)
                                        <option value="{{ $parent->uuid }}">{{ $parent->name }}</option>
                                    @endforeach
                                </select>

                                @error('parent')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="related">{{ trans('lookup.related') }}</label>

                                <select name="related" class="select2 form-control @error('related') is-invalid @enderror" id="related">
                                    <option value="0">{{ trans('lookup.no_related') }}</option>
                                    @foreach($relateds as $related)
                                        <option value="{{ $related->uuid }}">{{ $related->name }}</option>
                                    @endforeach
                                </select>

                                @error('related')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="valid-state">{{ trans('lookup.name') }}</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('lookup.enter_name') }}" value="{{ old('name') }}" required/>
                                @error('name')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        @foreach(langs() as $lang)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="" for="display_name_{{ $lang }}">{{ trans('lookup.display_name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('display_name_'.$lang) is-invalid @enderror "
                                           id="display_name_{{ $lang }}"
                                           type="text" name="display_name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('lookup.display_name') }} {{ $lang }} .." value="{{ old('display_name_' . $lang) }}">

                                    @error('display_name_'.$lang)
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        @foreach(langs() as $lang)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="" for="details_{{ $lang }}">{{ trans('lookup.details') }} ({{ $lang }})</label>
                                    <input class="form-control @error('details_'.$lang) is-invalid @enderror "
                                           id="details_{{ $lang }}"
                                           type="text" name="details_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('lookup.details') }} {{ $lang }} .." value="{{ old('details_' . $lang) }}">

                                    @error('details_'.$lang)
                                    <div class="invalid-feedback">
                                        <i class="bx bx-radio-circle"></i>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="" for="media_image_uuid">{{ trans('lookup.media_image') }}</label>
                                <select class="select2 form-control @error('media_image_uuid') is-invalid @enderror" name="media_image_uuid" id="media_image_uuid">
                                    <option value="choose">{{ trans('general.choose') }}</option>
                                    @foreach($medias as $media)
                                        <option value="{{$media->uuid}}">{{ $media->file_name }}</option>
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
                            <div class="form-group">
                                <label for="valid-state">{{ trans('lookup.ordering') }}</label>
                                <input type="number" name="ordering" class="form-control @error('ordering') is-invalid @enderror" placeholder="{{ trans('lookup.ordering') }}" value="{{ old('ordering') }}"/>
                                @error('ordering')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="mb-1">
                                <label class="" for="">{{ trans('book.is_active') }}</label>
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





