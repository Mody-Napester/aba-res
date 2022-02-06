@extends('@auth._layouts.master')

@section('title') {{ trans('login.login_title') }} @endsection

@section('content')
    <!-- login page start -->
    <section id="auth-login" class="row flexbox-container">
        <div class="col-xl-8 col-11">
            <div class="card bg-authentication mb-0">
                <div class="row m-0">
                    <!-- left section-login -->
                    <div class="col-md-6 col-12 px-0">
                        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="text-center mb-2">{{ trans('login.welcome_back') }}</h4>
                                </div>
                            </div>
                            <div class="card-body">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="email">{{ trans('login.Email') }}</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="{{ trans('login.Email') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="text-bold-600" for="password">{{ trans('login.Password') }}</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="{{ trans('login.Password') }}" required autocomplete="current-password">
                                    </div>

                                    <button type="submit" class="btn btn-primary glow w-100 position-relative">
                                        {{ trans('login.Login') }}<i id="icon-arrow" class="bx bx-right-arrow-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- right section image -->
                    <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                        <img class="img-fluid" src="{{ url('assets_dashboard/assets/images/logo/aba-logo.png') }}" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login page ends -->
@endsection
