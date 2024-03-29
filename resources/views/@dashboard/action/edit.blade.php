@extends('@dashboard._layouts.master')

@section('title') {{ trans('general.edit') }} {{ $resource->name }} @endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('action.actiones') }}</h5>
                <div class="breadcrumb-wrapper d-none d-sm-block">
                    <ol class="breadcrumb p-0 mb-0 pl-1">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active">{{ $resource->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit -->
    <section>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><b>{{ trans('general.edit') }} {{ $resource->name }}</b></h4>
            </div>
            <div class="card-body">
                <form action="{{ route('action.update', [$resource->uuid]) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="valid-state">{{ trans('action.name') }}</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('action.enter_name') }}" value="{{ $resource->name }}" required/>
                            @error('name')
                            <div class="invalid-feedback">
                                <i class="bx bx-radio-circle"></i>
                                {{ $message }}
                            </div>
                            @enderror
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
