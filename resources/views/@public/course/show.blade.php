@extends('@public._layouts.master_en')

@section('title') {{ getTrans($course->name, lang()) }} @endsection

@section('content')

    <div class="page-title-area" >
        <div class="container">
            <div class="page-title-content">
                <h2>{{ getTrans($course->name, lang()) }}</h2>

                <p id="breadcrumbs">
                    <a href="{{ route('public.home.index') }}">Home</a> &raquo;
                    <span class="breadcrumb_last" aria-current="page">Course</span>
                </p>
            </div>
        </div>
    </div>

    <div class="courses-details-area pb-100">
        <div class="courses-details-image" style="height:500px;overflow: hidden;">
            @if($course->media_banner)
                <img class="lazyloaded smartify" alt="" src="{{ url('assets_public/files/image') . '/' . $course->media_banner->file_name }}" style="width:100%;">
            @else
                -
            @endif
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="courses-details-desc">
                        <div id="learn-press-course" class="course-summary">
                            <div class="course-content course-summary-content">
                                <div class="lp-entry-content lp-content-area">
                                    <div class="entry-content-left">
                                        <div id="learn-press-course-tabs" class="course-tabs">
                                            <input type="radio" name="learn-press-course-tab-radio" id="tab-overview-input" checked="checked" value="overview">
                                            <input type="radio" name="learn-press-course-tab-radio" id="tab-curriculum-input" value="curriculum">
                                            <input type="radio" name="learn-press-course-tab-radio" id="tab-instructor-input" value="instructor">
                                            <input type="radio" name="learn-press-course-tab-radio" id="tab-reviews-input" value="reviews">

                                            <ul class="learn-press-nav-tabs course-nav-tabs" data-tabs="4">

                                                <li class="course-nav course-nav-tab-overview active">
                                                    <label for="tab-overview-input">Overview</label>
                                                </li>

                                                <li class="course-nav course-nav-tab-curriculum">
                                                    <label for="tab-curriculum-input">Curriculum</label>
                                                </li>

                                                <li class="course-nav course-nav-tab-instructor">
                                                    <label for="tab-instructor-input">Instructor</label>
                                                </li>

                                                <li class="course-nav course-nav-tab-reviews">
                                                    <label for="tab-reviews-input">Reviews</label>
                                                </li>

                                            </ul>

                                            <div class="course-tab-panels">

                                                <div class="course-tab-panel-overview course-tab-panel" id="tab-overview">
                                                    <div class="course-description" id="learn-press-course-description">
                                                        {!! getTrans($course->details, lang()) !!}
                                                    </div>
                                                </div>

                                                <div class="course-tab-panel-curriculum course-tab-panel" id="tab-curriculum">
                                                    <div class="course-curriculum" id="learn-press-course-curriculum">
                                                        <div class="curriculum-scrollable">
                                                            <ul class="curriculum-sections">

                                                                @foreach($course->sessions as $session)
                                                                    <li class="section" id="section-session-1-keep-the-interaction-going-80" data-id="session-1-keep-the-interaction-going-80" data-section-id="">

                                                                        <div class="section-header">
                                                                            <div class="section-left">
                                                                                <h5 class="section-title">{{ getTrans($session->name, lang()) }}</h5>
                                                                                <span class="section-toggle">
                                                                                    <i class="fas fa-caret-down"></i>
                                                                                    <i class="fas fa-caret-up"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>

                                                                        <ul class="section-content">
                                                                            @foreach($session->lessons as $lesson)
                                                                                <li class="course-item course-item-lp_lesson item-locked" data-id="">
                                                                                    <a class="section-item-link" href="javascript:void(0);">
                                                                                        <span class="item-name">{{ getTrans($lesson->name, lang()) }}</span>
                                                                                        <div class="course-item-meta">
                                                                                            <span class="item-meta course-item-status" title="Unread"></span>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>

                                                                    </li>
                                                                @endforeach

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="course-tab-panel-instructor course-tab-panel" id="tab-instructor">
                                                    <div class="course-author">
                                                        <div class="lp-course-author">
                                                            <div class="course-author__pull-left">
                                                                <img alt="{{ ($course->instructor)? getTrans($course->instructor->name, lang()) : '' }}" src="{{ url('assets_public/images/avatar.png') }}"  class="lazyload avatar avatar-96 photo smartify" height="251" width="250">
                                                            </div>

                                                            <div class="course-author__pull-right">
                                                                <div class="author-title">
                                                                    <a href="{{ route('public.instructor.show', [($course->instructor)? $course->instructor->uuid : '-']) }}"><span>{{ ($course->instructor)? getTrans($course->instructor->name, lang()) : '' }}</span></a>
                                                                </div>
                                                                <div class="author-description margin-bottom"></div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="course-tab-panel-reviews course-tab-panel" id="tab-reviews">

                                                    <div class="course-rate">
                                                        <div class="course-rate__summary">
                                                            <div class="course-rate__summary-value">0.0</div>
                                                            <div class="course-rate__summary-stars">
                                                                <div class="review-stars-rated" title="0 out of 5 stars">
                                                                    <div class="review-star">
                                                                        <i class="far"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                        <i class="fas" style="width:0%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                    </div>
                                                                    <div class="review-star">
                                                                        <i class="far"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                        <i class="fas" style="width:0%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                    </div>
                                                                    <div class="review-star">
                                                                        <i class="far"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                        <i class="fas" style="width:0%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                    </div>
                                                                    <div class="review-star">
                                                                        <i class="far"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                        <i class="fas" style="width:0%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                    </div>
                                                                    <div class="review-star">
                                                                        <i class="far"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                        <i class="fas" style="width:0%;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                            </svg></i>
                                                                    </div>
                                                                </div>        </div>
                                                            <div class="course-rate__summary-text">
                                                                <span>0</span> total        </div>

                                                        </div>

                                                        <div class="course-rate__details">
                                                            <div class="course-rate__details-row">
                <span class="course-rate__details-row-star">
                    5                    <i class="fas" style="color: #ffb60a">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                </svg>
                    </i>
                </span>
                                                                <div class="course-rate__details-row-value">
                                                                    <div class="rating-gray"></div>
                                                                    <div class="rating" style="width:0%;" title="0%">
                                                                    </div>
                                                                    <span class="rating-count">0</span>
                                                                </div>
                                                            </div>
                                                            <div class="course-rate__details-row">
                <span class="course-rate__details-row-star">
                    4                    <i class="fas" style="color: #ffb60a">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                </svg>
                    </i>
                </span>
                                                                <div class="course-rate__details-row-value">
                                                                    <div class="rating-gray"></div>
                                                                    <div class="rating" style="width:0%;" title="0%">
                                                                    </div>
                                                                    <span class="rating-count">0</span>
                                                                </div>
                                                            </div>
                                                            <div class="course-rate__details-row">
                <span class="course-rate__details-row-star">
                    3                    <i class="fas" style="color: #ffb60a">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                </svg>
                    </i>
                </span>
                                                                <div class="course-rate__details-row-value">
                                                                    <div class="rating-gray"></div>
                                                                    <div class="rating" style="width:0%;" title="0%">
                                                                    </div>
                                                                    <span class="rating-count">0</span>
                                                                </div>
                                                            </div>
                                                            <div class="course-rate__details-row">
                <span class="course-rate__details-row-star">
                    2                    <i class="fas" style="color: #ffb60a">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                </svg>
                    </i>
                </span>
                                                                <div class="course-rate__details-row-value">
                                                                    <div class="rating-gray"></div>
                                                                    <div class="rating" style="width:0%;" title="0%">
                                                                    </div>
                                                                    <span class="rating-count">0</span>
                                                                </div>
                                                            </div>
                                                            <div class="course-rate__details-row">
                <span class="course-rate__details-row-star">
                    1                    <i class="fas" style="color: #ffb60a">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                </svg>
                    </i>
                </span>
                                                                <div class="course-rate__details-row-value">
                                                                    <div class="rating-gray"></div>
                                                                    <div class="rating" style="width:0%;" title="0%">
                                                                    </div>
                                                                    <span class="rating-count">0</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end entry content left -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="courses-details-info">
                        <div class="image">

                            @if($course->media_image)
                                <img class="lazyloaded smartify" src="{{ url('assets_public/files/image') . '/' . $course->media_banner->file_name }}" alt="" style="">
                            @else
                                -
                            @endif

{{--                            <a href="https://www.youtube.com/watch?v=PWvPbGWVRrU" class="link-btn popup-youtube"></a>--}}

                            <div class="content">
{{--                                <i class="flaticon-play"></i>--}}
                                <span>Course Preview</span>
                            </div>
                        </div>

                        <ul class="info">
                            <li class="price">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="flaticon-tag"></i> Price</span>
                                    <div class="course-price">
{{--                                        <span class="origin-price">د.ا200</span>--}}
                                        <span class="price">د.ا{{ $course->price }} </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="flaticon-teacher"></i> Instructor</span>
                                    <a href="" class="d-inline-block">{{ ($course->instructor)? getTrans($course->instructor->name, lang()) : '' }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="flaticon-time"></i> Duration</span>{{ $course->time_frame }} hours
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="flaticon-distance-learning"></i> Sessions</span>{{ ($course->sessions)? $course->sessions()->count() : 0 }} Session
                                </div>
                            </li>

                            <li>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><i class="flaticon-web"></i> Enrolled</span>{{ ($course->students)? $course->students()->count() : 0 }} Students
                                </div>
                            </li>
                        </ul>

                        <div class="btn-box">
                            <div class="wrap-btn-add-course-to-cart">
                                <form name="form-add-course-to-cart" method="post">
                                    <input type="hidden" name="course-id" value="4227">
                                    <input type="hidden" name="add-course-to-cart-nonce" value="d7c5f17eb3">
                                    <button class="lp-button btn-add-course-to-cart default-btn">
                                        <i class="flaticon-tag"></i>
                                        Add to cart<span></span>
                                    </button>
                                </form>
                            </div>
                        </div>

{{--                        <div class="courses-share">--}}
{{--                            <div class="share-info">--}}
{{--                                <span>Share This Course <i class="flaticon-share"></i></span>--}}

{{--                                <ul class="social-link">--}}
{{--                                    <li><a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Faba-resources.com%2Fen%2Fcourse%2Fregistered-behavior-technician-rbt-test-2%2F" class="d-block" target="_blank"><i class="bx bxl-facebook"></i></a></li>--}}
{{--                                    <li><a href="https://twitter.com/share?url='https%3A%2F%2Faba-resources.com%2Fen%2Fcourse%2Fregistered-behavior-technician-rbt-test-2%2F&amp;text=More%20Than%20Words%C2%AE%20%26%238211%3B%20For%20Parents%20of%20Children%20with%20ASD%20or%20Social%20Communication%20Difficulties" class="d-block" target="_blank"><i class="bx bxl-twitter"></i></a></li>--}}
{{--                                    <li><a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Faba-resources.com%2Fen%2Fcourse%2Fregistered-behavior-technician-rbt-test-2%2F &amp;description=&amp;media=https%3A%2F%2Faba-resources.com%2Fwp-content%2Fuploads%2F2021%2F11%2F3656.png" onclick="window.open(this.href); return false;" class="d-block" target="_blank"><i class="bx bxl-pinterest"></i></a></li>--}}
{{--                                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Faba-resources.com%2Fen%2Fcourse%2Fregistered-behavior-technician-rbt-test-2%2F" class="d-block" target="_blank"><i class="bx bxl-linkedin"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
{{--                    <div class="single-course-sidebar"></div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection
