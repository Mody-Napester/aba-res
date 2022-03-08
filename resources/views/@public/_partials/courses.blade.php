<section class="elementor-section elementor-top-section elementor-element elementor-element-53f9524c elementor-section-full_width courses-area bg-black ptb-100 elementor-section-height-default elementor-section-height-default" data-id="53f9524c" data-element_type="section">
    <div class="elementor-widget-wrap">


        <div class="elementor-element elementor-element-18f2130c elementor-widget elementor-widget-Section" data-id="18f2130c" data-element_type="widget" data-widget_type="Section.default">
            <div class="elementor-widget-container">
                <div class="section-title">
                    <span class="sub-title">Now you Can Improve your Skills </span>
                    <h2>COURSES</h2>
                    <p>Explore all of our courses and pick your suitable ones to enroll and start learning with us! We ensure that you will never regret it!</p>
                </div>
            </div>
        </div>


        <div class="elementor-element elementor-element-75eb4559 elementor-widget elementor-widget-eCademy_Courses" data-id="75eb4559" data-element_type="widget" data-widget_type="eCademy_Courses.default">
            <div class="elementor-widget-container">
                <div class="container">
                    <div class="row">

                        @foreach(\App\Models\Course::where('is_published', 1)->get() as $course)
                            @include('@public._partials.course_card', ['course' => $course])
                        @endforeach

                        <div class="col-lg-12 col-md-12">
                            <div class="courses-info">
                                <p>Enjoy the top notch learning methods and achieve next level skills! You are the creator of your own career &amp; we will guide you through that.  <a href="../profile/index.html"><strong>Register Free Now!.</strong>​</a></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
