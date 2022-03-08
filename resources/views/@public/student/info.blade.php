@extends('@public._layouts.master_en')

@section('title') {{ trans('contact.page_title') }} @endsection

@section('content')

    <div class="page-area">

        <div id="post-13" class="post-13 page type-page status-publish hentry">

            <div class="entry-content ecademy-Instructor/Student Profile-un">
                <div class="learnpress">


                    <div id="learn-press-profile" class="lp-user-profile current-user">


                        <div class="lp-content-area" style="margin:0px auto">

                            <div class="wrapper-profile-header wrap-fullwidth" style="background-color: #eeeeee;">
                                <div class="lp-content-area lp-profile-content-area" style="margin:0px auto;padding-top: 0;">
                                    <div class="lp-profile-left">
                                        <div class="lp-user-profile-avatar">
                                            <img alt="User Avatar" src="https://secure.gravatar.com/avatar/2bf519bfb223dbdd53638f974e5fccf0?s=96&amp;d=mm&amp;r=g" data-src="https://secure.gravatar.com/avatar/2bf519bfb223dbdd53638f974e5fccf0?s=96&amp;d=mm&amp;r=g" data-srcset="https://secure.gravatar.com/avatar/2bf519bfb223dbdd53638f974e5fccf0?s=192&amp;d=mm&amp;r=g 2x" class="avatar avatar-96 photo ls-is-cached lazyloaded smartify" height="251" width="250" srcset="https://secure.gravatar.com/avatar/2bf519bfb223dbdd53638f974e5fccf0?s=192&amp;d=mm&amp;r=g 2x">
                                        </div>
                                    </div>
                                    <div class="lp-profile-right" style="margin-top: 300px;color: #444444;">
                                        <div class="lp-profile-username">{{ auth()->user()->name }}</div>
                                        <ul class="social-link"></ul>
                                    </div>
                                </div>
                            </div>

                            <aside id="profile-sidebar">
                                <div id="profile-nav">
                                    @include('@public.student._links')
                                </div>
                            </aside>

                            <article id="profile-content" class="lp-profile-content">
                                <div id="profile-content-settings">

                                    <div class="learn-press-tabs">

                                        <input type="radio" name="course-tab-62256b8f361d1>" class="learn-press-tabs__checker" checked="checked" id="course-tab-62256b8f361d1__basic-information">

                                        <input type="radio" name="course-tab-62256b8f361d1>" class="learn-press-tabs__checker" id="course-tab-62256b8f361d1__avatar">

                                        <input type="radio" name="course-tab-62256b8f361d1>" class="learn-press-tabs__checker" id="course-tab-62256b8f361d1__change-password">

                                        <ul class="learn-press-tabs__nav" data-tabs="3">

                                            <li class="learn-press-tabs__tab basic-information active">
                                                <label><a href="https://aba-resources.com/en/profile/a2@a.a/settings/basic-information/">General</a></label>
                                            </li>


                                            <li class="learn-press-tabs__tab avatar">
                                                <label><a href="https://aba-resources.com/en/profile/a2@a.a/settings/avatar/">Avatar</a></label>
                                            </li>


                                            <li class="learn-press-tabs__tab change-password">
                                                <label><a href="https://aba-resources.com/en/profile/a2@a.a/settings/change-password/">Password</a></label>
                                            </li>


                                        </ul>
                                    </div>



                                    <form method="post" id="learn-press-profile-basic-information" name="profile-basic-information" enctype="multipart/form-data" class="learn-press-form">


                                        <ul class="form-fields">



                                            <li class="form-field form-field__first-name form-field__50">
                                                <label for="first_name">First name</label>
                                                <div class="form-field-input">
                                                    <input type="text" name="first_name" id="first_name" value="" class="regular-text">
                                                </div>
                                            </li>
                                            <li class="form-field form-field__last-name form-field__50">
                                                <label for="last_name">Last name</label>
                                                <div class="form-field-input">
                                                    <input type="text" name="last_name" id="last_name" value="" class="regular-text">
                                                </div>
                                            </li>
                                            <li class="form-field form-field__last-name form-field__50">
                                                <label for="account_display_name">Display name<span class="required">*</span></label>
                                                <div class="form-field-input">
                                                    <input type="text" disabled="" value="aaaaaa" class="regular-text">
                                                </div>
                                            </li>
                                            <li class="form-field form-field__last-name form-field__50">
                                                <label for="account_email">Email address<span class="required">*</span></label>
                                                <div class="form-field-input">
                                                    <input type="email" name="account_email" id="account_email" value="a2@a.a" class="regular-text">
                                                </div>
                                            </li>

                                            <li class="form-field form-field__bio form-field__clear">
                                                <label for="description">Biographical Info</label>
                                                <div class="form-field-input">
                                                    <textarea name="description" id="description" rows="5" cols="30"></textarea>
                                                    <p class="description">Share a little biographical information to fill out your profile. This may be shown publicly.</p>
                                                </div>
                                            </li>


                                            <li class="form-field form-field__profile-social form-field__50 form-field__facebook">
                                                <label for="description">Facebook Profile</label>
                                                <div class="form-field-input">
                                                    <input type="text" value="" name="user_profile_social[facebook]" placeholder="https://">
                                                </div>
                                            </li>

                                            <li class="form-field form-field__profile-social form-field__50 form-field__twitter">
                                                <label for="description">Twitter Profile</label>
                                                <div class="form-field-input">
                                                    <input type="text" value="" name="user_profile_social[twitter]" placeholder="https://">
                                                </div>
                                            </li>

                                            <li class="form-field form-field__profile-social form-field__50 form-field__youtube">
                                                <label for="description">Youtube Channel</label>
                                                <div class="form-field-input">
                                                    <input type="text" value="" name="user_profile_social[youtube]" placeholder="https://">
                                                </div>
                                            </li>

                                            <li class="form-field form-field__profile-social form-field__50 form-field__linkedin">
                                                <label for="description">Linkedin Profile</label>
                                                <div class="form-field-input">
                                                    <input type="text" value="" name="user_profile_social[linkedin]" placeholder="https://">
                                                </div>
                                            </li>

                                        </ul>


                                        <p>
                                            <input type="hidden" name="save-profile-basic-information" value="15bc95c578">
                                        </p>

                                        <button type="submit" name="submit">Save changes</button>

                                    </form>

                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div><!-- .entry-content -->

        </div><!-- #post-13 -->



    </div>

@endsection



