<section>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><b>{{ trans('general.create_new') }}</b></h4>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-sm-6 mb-2">
                        <label for="valid-state">{{ trans('user.name') }}</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ trans('user.enter_name') }}" value="{{ old('name') }}" required/>
                        @error('name')
                        <div class="invalid-feedback">
                            <i class="bx bx-radio-circle"></i>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label for="invalid-state">{{ trans('user.email') }}</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ trans('user.enter_email') }}" value="{{ old('email') }}" required/>
                        @error('email')
                        <div class="invalid-feedback">
                            <i class="bx bx-radio-circle"></i>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="invalid-state">{{ trans('user.password') }}</label>
                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ trans('user.enter_password') }}" required/>
                        @error('password')
                        <div class="invalid-feedback">
                            <i class="bx bx-radio-circle"></i>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label for="groups">{{ trans('user.groups') }}</label>

                        <select name="groups[]" multiple class="select2 form-control @error('groups') is-invalid @enderror" required id="groups">
                            @foreach($groups as $group)
                                <option value="{{ $group->uuid }}">{{ $group->name }}</option>
                            @endforeach
                        </select>

                        @error('groups')
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
