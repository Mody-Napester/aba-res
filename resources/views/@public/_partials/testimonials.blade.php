<section style="background-color:#eeeeee;" class="elementor-section elementor-top-section elementor-element elementor-element-4d1d25d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4d1d25d" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67cc63a" data-id="67cc63a" data-element_type="column">
                <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-be478b4 elementor-widget elementor-widget-Feedback" data-id="be478b4" data-element_type="widget" data-widget_type="Feedback.default">
                            <div class="elementor-widget-container">
                                <div class="testimonials-area ptb-100">
                                    <div class="container">

                                        <div class="section-title">
                                            <span class="sub-title"></span>
                                            <h2 >Efficient Customized Programs.</h2>
                                            <p>What People Say About Our Courses</p>
                                        </div>

                                        <div class="testimonials-slides owl-carousel owl-theme">

                                            @foreach(\App\Models\Testimonial::where('is_active', 1)->get() as $testimonial)
                                                <div class="single-testimonials-item" style="min-height: 160px;">
                                                    <img class="client-img" src="{{ url('assets_public/images/avatar.png') }}" alt="{{ getTrans($testimonial->name, lang()) }}">

                                                    <p>{!! getTrans($testimonial->details, lang()) !!}</p>
                                                    <h3>{{ getTrans($testimonial->name, lang()) }}</h3>
                                                    <span>{{ getTrans($testimonial->role, lang()) }}</span>

                                                    <div class="shape-img">
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
