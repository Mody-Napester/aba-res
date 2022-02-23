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
                    <a href="{{ route('book.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                    <a href="{{ route('book.create') }}" class="btn btn-sm btn-success"><i class="bx bxs-book-add"></i> {{ trans('general.create_new') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('book.book') }}</h5>
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
                <form action="{{ route('book.update', [$resource->uuid]) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">

                        @foreach(langs() as $lang)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="" for="name_{{ $lang }}">{{ trans('book.name') }} ({{ $lang }})</label>
                                    <input class="form-control @error('name_'.$lang) is-invalid @enderror "
                                           id="name_{{ $lang }}"
                                           type="text" name="name_{{ $lang }}"
                                           placeholder="{{ trans('general.enter') }} {{ trans('book.name') }} {{ $lang }} .." value="{{ getTrans($resource->name, $lang) }}">

                                    @error('name_'.$lang)
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
                                <label class="" for="media_cover_uuid">{{ trans('course.media_cover') }}</label>
                                <select class="select2 form-control @error('media_cover_uuid') is-invalid @enderror" name="media_cover_uuid" id="media_cover_uuid">
                                    <option value="choose">{{ trans('general.choose') }}</option>
                                    @foreach($medias as $media)
                                        <option @if($resource->media_cover_id == $media->id) selected @endif value="{{$media->uuid}}">{{ $media->file_name }}</option>
                                    @endforeach
                                </select>

                                @error('media_cover_uuid')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="" for="media_book_uuid">{{ trans('course.media_book') }}</label>
                                <select class="select2 form-control @error('media_book_uuid') is-invalid @enderror" name="media_book_uuid" id="media_book_uuid">
                                    <option value="choose">{{ trans('general.choose') }}</option>
                                    @foreach($medias as $media)
                                        <option @if($resource->media_book_id == $media->id) selected @endif value="{{$media->uuid}}">{{ $media->file_name }}</option>
                                    @endforeach
                                </select>

                                @error('media_book_uuid')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="price">{{ trans('book.price') }}</label>
                                <input class="form-control @error('price') is-invalid @enderror "
                                       id="price"
                                       type="text" name="price"
                                       placeholder="{{ trans('general.enter') }} {{ trans('book.price') }} .." value="{{ $resource->price }}">

                                @error('price')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-1">
                                <label class="" for="">{{ trans('book.is_free') }}</label>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline mb-1">
                                <input type="checkbox" name="is_free" class="custom-control-input" @if($resource->is_free == 1) checked @endif value="1" id="is_free">
                                <label class="custom-control-label mr-1" for="is_free"></label>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-1">
                                <label class="" for="">{{ trans('book.is_published') }}</label>
                            </div>

                            <div class="custom-control custom-switch custom-control-inline mb-1">
                                <input type="checkbox" name="is_published" class="custom-control-input" @if($resource->is_published == 1) checked @endif value="1" id="is_published">
                                <label class="custom-control-label mr-1" for="is_published"></label>
                            </div>
                        </div>

                        @foreach(langs() as $lang)
                            <div class="col-md-6">
                                <label for="details_{{ $lang }}">{{ trans('book.details') }} ({{ $lang }})</label>

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
