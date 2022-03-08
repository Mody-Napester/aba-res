<div class="learn-press-form-login learn-press-form">

    <h3>Login</h3>

    <form name="learn-press-login" method="post" action="{{ route('public.front.login') }}">
        @csrf

        <ul class="form-fields">
            <li class="form-field">
                <label for="email">Email&nbsp;<span class="required">*</span></label>
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="email" />
            </li>
            <li class="form-field">
                <label for="password">Password&nbsp;<span class="required">*</span></label>
                <input type="password" name="password" id="password" placeholder="Password" autocomplete="current-password" />
            </li>
        </ul>

{{--        <p>--}}
{{--            <label><input type="checkbox" name=""/>Remember me</label>--}}
{{--        </p>--}}
        <p>
            <button type="submit">Login</button>
        </p>
{{--        <p>--}}
{{--            <a href="">Lost your password?</a>--}}
{{--        </p>--}}
    </form>

</div>
