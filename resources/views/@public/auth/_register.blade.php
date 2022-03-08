<div class="learn-press-form-register learn-press-form">

    <h3>Register</h3>


    <form name="learn-press-register" method="post" action="{{ route('public.front.register') }}">
        @csrf

        <ul class="form-fields">

            <li class="form-field">
                <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                <input id ="reg_email" name="email" type="text" placeholder="Email" autocomplete="email" value="">
            </li>
            <li class="form-field">
                <label for="reg_password">Password&nbsp;<span class="required">*</span></label>
                <input id ="reg_password" name="password" type="password" placeholder="Password" autocomplete="new-password">
            </li>
            <li class="form-field">
                <label for="reg_password2">Confirm Password&nbsp;<span class="required">*</span></label>
                <input id ="reg_password2" name="password" type="password" placeholder="Password" autocomplete="off">
            </li>
            <li class="form-field">
                <label for="reg_display_name">Display name</label>
                <input id="reg_display_name" name="display_name" type="text" placeholder="Display name" value="">
            </li>

        </ul>

        <button type="submit">Register</button>

    </form>


</div>
