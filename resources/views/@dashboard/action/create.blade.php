<section>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><b>{{ trans('general.create_new') }}</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('action.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-sm-12">
                        <label for="valid-state">{{ trans('action.name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('action.enter_name') }}" value="{{ old('name') }}" required/>
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
