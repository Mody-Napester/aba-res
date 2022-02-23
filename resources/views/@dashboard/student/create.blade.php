@extends('@dashboard._layouts.master')

@section('title') {{ trans('student.page_title') }} @endsection

@section('post_head')
    <script src="{{ url('assets_dashboard/assets-custom/ckeditor/ckeditor.js') }}"></script>
@endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <div class="float-right">
                    <a href="{{ route('student.index') }}" class="btn btn-sm btn-primary"><i class="bx bx-list-ol"></i> {{ trans('general.list') }}</a>
                </div>

                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('student.create') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ trans('student.create') }}</li>
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
                <form action="{{ route('student.store') }}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="first_name">{{ trans('student.first_name') }}</label>
                                <input class="form-control @error('first_name') is-invalid @enderror "
                                       id="first_name" type="text" name="first_name"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.first_name') }} .." value="{{ old('first_name') }}">

                                @error('first_name')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="last_name">{{ trans('student.last_name') }}</label>
                                <input class="form-control @error('last_name') is-invalid @enderror "
                                       id="last_name" type="text" name="last_name"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.last_name') }} .." value="{{ old('last_name') }}">

                                @error('last_name')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="display_name">{{ trans('student.display_name') }}</label>
                                <input class="form-control @error('display_name') is-invalid @enderror "
                                       id="display_name" type="text" name="display_name"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.display_name') }} .." value="{{ old('display_name') }}">

                                @error('display_name')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="email">{{ trans('student.email') }}</label>
                                <input class="form-control @error('email') is-invalid @enderror "
                                       id="email" type="email" name="email"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.email') }} .." value="{{ old('email') }}">

                                @error('email')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="phone">{{ trans('student.phone') }}</label>
                                <input class="form-control @error('phone') is-invalid @enderror "
                                       id="phone"
                                       type="text" name="phone"
                                       placeholder="{{ trans('general.phone') }} {{ trans('student.phone') }} .." value="{{ old('phone') }}">

                                @error('phone')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="info">{{ trans('student.info') }}</label>
                                <input class="form-control @error('info') is-invalid @enderror "
                                       id="info"
                                       type="text" name="info"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.info') }} .." value="{{ old('info') }}">

                                @error('info')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="social_facebook_url">{{ trans('student.social_facebook_url') }}</label>
                                <input class="form-control @error('social_facebook_url') is-invalid @enderror "
                                       id="social_facebook_url"
                                       type="text" name="social_facebook_url"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.social_facebook_url') }} .." value="{{ old('social_facebook_url') }}">

                                @error('social_facebook_url')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="social_twitter_url">{{ trans('student.social_twitter_url') }}</label>
                                <input class="form-control @error('social_twitter_url') is-invalid @enderror "
                                       id="social_twitter_url"
                                       type="text" name="social_twitter_url"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.social_twitter_url') }} .." value="{{ old('social_twitter_url') }}">

                                @error('social_twitter_url')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="social_linkedin_url">{{ trans('student.social_linkedin_url') }}</label>
                                <input class="form-control @error('social_linkedin_url') is-invalid @enderror "
                                       id="social_linkedin_url"
                                       type="text" name="social_linkedin_url"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.social_linkedin_url') }} .." value="{{ old('social_linkedin_url') }}">

                                @error('social_linkedin_url')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="social_youtube_url">{{ trans('student.social_youtube_url') }}</label>
                                <input class="form-control @error('social_youtube_url') is-invalid @enderror "
                                       id="social_youtube_url"
                                       type="text" name="social_youtube_url"
                                       placeholder="{{ trans('general.enter') }} {{ trans('student.social_youtube_url') }} .." value="{{ old('social_youtube_url') }}">

                                @error('social_youtube_url')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="" for="">{{ trans('student.is_active') }}</label>
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

