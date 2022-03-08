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

                            @include('@public.student._links')

                            <article id="profile-content" class="lp-profile-content">

                                <div class="learn-press-message success"><i class="fa"></i>No quizzes!</div>

                            </article>

                        </div>

                    </div>
                </div>
            </div><!-- .entry-content -->

        </div><!-- #post-13 -->



    </div>

@endsection



