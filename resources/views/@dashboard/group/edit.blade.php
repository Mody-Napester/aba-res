@extends('@dashboard._layouts.master')

@section('title') {{ trans('general.edit') }} {{ $resource->name }} @endsection

@section('content')

    <!-- Page Breadcrumb -->
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2 mt-1">
            <div class="breadcrumbs-top">
                <h5 class="content-header-title float-left pr-1 mb-0">{{ trans('group.groups') }}</h5>
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
                <form action="{{ route('group.update', [$resource->uuid]) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-md-12">
                            <label for="valid-state">{{ trans('group.name') }}</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('group.enter_name') }}" value="{{ $resource->name }}" required/>
                            @error('name')
                            <div class="invalid-feedback">
                                <i class="bx bx-radio-circle"></i>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>{{ trans('group.screens_actions') }}</label>

                            @foreach($screens as $screen)
                                <div class="mt-1">
                                    <label for="screen-{{ $screen->uuid }}"><b>{{ str_well($screen->name) }}</b></label>

                                    <div class="mt-1">
                                        @foreach($screen->actions as $action)
                                            <div class="checkbox mr-2">
                                                <input type="checkbox" name="screens[{{ $screen->uuid }}][]"
                                                       @if(\Illuminate\Support\Facades\DB::table('group_screen_action')
                                                            ->where('group_id', $resource->id)
                                                            ->where('screen_id', $screen->id)
                                                            ->where('action_id', $action->id)
                                                            ->first()
                                                            ) checked @endif
                                                       class="checkbox-input" value="{{ $action->uuid }}" id="action-{{ $action->uuid }}-{{ $screen->uuid }}">
                                                <label for="action-{{ $action->uuid }}-{{ $screen->uuid }}">{{ str_well($action->name) }} {{ str_well($screen->name) }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

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
