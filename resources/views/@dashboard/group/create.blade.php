<section>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><b>{{ trans('general.create_new') }}</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('group.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <label for="valid-state">{{ trans('group.name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('group.enter_name') }}" value="{{ old('name') }}" required/>
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
{{--                                <div class="checkbox">--}}
{{--                                    <input type="checkbox" name="screen[]" class="checkbox-input" value="{{ $screen->uuid }}" id="screen-{{ $screen->uuid }}">--}}
{{--                                    <label for="screen-{{ $screen->uuid }}"><b>{{ str_well($screen->name) }}</b></label>--}}
{{--                                </div>--}}

                                <div class="mt-1">
                                    @foreach($screen->actions as $action)
                                        <div class="checkbox mr-2">
                                            <input type="checkbox" name="screens[{{ $screen->uuid }}][]" class="checkbox-input" value="{{ $action->uuid }}" id="action-{{ $action->uuid }}-{{ $screen->uuid }}">
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
