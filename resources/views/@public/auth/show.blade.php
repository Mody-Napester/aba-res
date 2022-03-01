@extends('@public._layouts.master_en')

@section('title') {{ trans('contact.page_title') }} @endsection

@section('content')

    <div class="page-title-area" >
        <div class="container">
            <div class="page-title-content">
                <h2 >Make Your Profile</h2>
                <p id="breadcrumbs">
                    <span><span><a href="../elearning-school/index.html">Home</a> &raquo; <span class="breadcrumb_last" aria-current="page">Contact</span></span></span></p>                                    </div>
        </div>


    </div>

    <div class="page-area">
        <div id="post-13" class="post-13 page type-page status-publish hentry">
            <div class="entry-content ecademy-Instructor/Student Profile-un">
                <div class="learnpress">
                    <div id="learn-press-profile"  class="lp-user-profile guest">
                        <div class="lp-content-area">
                            @include('@public.auth._login')
                            @include('@public.auth._register')
                        </div>

                    </div>
                </div>
            </div><!-- .entry-content -->
        </div><!-- #post-13 -->
    </div>

@endsection
