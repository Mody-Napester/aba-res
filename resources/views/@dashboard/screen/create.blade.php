<section>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><b>{{ trans('general.create_new') }}</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('screen.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <label for="valid-state">{{ trans('screen.name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('screen.enter_name') }}" value="{{ old('name') }}" required/>
                        @error('name')
                        <div class="invalid-feedback">
                            <i class="bx bx-radio-circle"></i>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-8">
                        <label for="actions">{{ trans('screen.actions') }}</label>

                        <select name="actions[]" multiple class="select2 form-control @error('actions') is-invalid @enderror" required id="actions">
                            @foreach($actions as $action)
                                <option value="{{ $action->uuid }}">{{ $action->name }}</option>
                            @endforeach
                        </select>

                        @error('actions')
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
