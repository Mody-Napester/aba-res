<div class="col-lg-4 col-md-6">
    <div class="single-courses-box ">
        <div class="courses-image">
            <a href="{{ route('public.course.show', [$course->uuid]) }}" class="d-block image">
                @if($course->media_image)
                    <img src="{{ url('assets_public/files/image') . '/' . $course->media_banner->file_name }}" alt="image" class="">
                @else
                    -
                @endif
            </a>

            <div class="course-price">
                <span class="price">&#x62f;.&#x627; {{ $course->price }}</span>
            </div>
        </div>

        <div class="courses-content">
            <div class="course-author d-flex align-items-center">
                <img alt="{{ ($course->instructor)? getTrans($course->instructor->name, lang()) : '' }}"
                     src="{{ url('assets_public/images/avatar.png') }}" class='avatar avatar-96 photo'
                     height='251' width='250' loading='lazy'/>
                <span>
                    <a href="{{ route('public.instructor.show', [($course->instructor)? $course->instructor->uuid : '-']) }}">
                        <span>{{ ($course->instructor)? getTrans($course->instructor->name, lang()) : '' }}</span>
                    </a>
                </span>
            </div>

            <h3>
                <a href="{{ route('public.course.show', [$course->uuid]) }}">{{ getTrans($course->name, lang()) }}</a>
            </h3>

            <p>{!! getTrans($course->short_details, lang()) !!}</p>

            <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                <li><i class='flaticon-agenda'></i>{{ ($course->sessions)? $course->sessions()->count() : 0 }} Sessions</li>
                <li><i class='flaticon-people'></i>{{ ($course->students)? $course->students()->count() : 0 }} Students</li>
            </ul>
        </div>
    </div>
</div>

