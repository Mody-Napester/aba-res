@extends('@public._layouts.master_en')

@section('title') {{ getTrans($instructor->name, lang()) }} @endsection

@section('content')

    <div class="page-area">

        <div class="entry-content ecademy-mahmmod-un">
            <div class="elementor elementor-5476">
                <div class="elementor-inner">
                    <div class="elementor-section-wrap">

                        <section class="pt-5 pb-5 elementor-section elementor-top-section elementor-element elementor-element-28a2fa25 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="28a2fa25" data-element_type="section">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">

                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-40c9fc02" data-id="40c9fc02" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap mt-5">

                                                <div class="elementor-element elementor-element-558c28dc elementor-widget elementor-widget-heading" data-id="558c28dc" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h1 class="elementor-heading-title elementor-size-xxl">{{ getTrans($instructor->name, lang()) }}</h1>
                                                    </div>
                                                </div>

                                                <div class="elementor-element elementor-element-10546223 elementor-widget elementor-widget-text-editor" data-id="10546223" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            <h4><strong>{{ getTrans($instructor->speciality, lang()) }}</strong></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="elementor-element elementor-element-3be9c454 elementor-widget elementor-widget-text-editor" data-id="3be9c454" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix">
                                                            {!! getTrans($instructor->details, lang()) !!}
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4e322b01" data-id="4e322b01" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">

                                                <div class="elementor-element elementor-element-33c12438 elementor-widget elementor-widget-spacer" data-id="33c12438" data-element_type="widget" data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="elementor-element elementor-element-68edae elementor-widget elementor-widget-image" data-id="68edae" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-image">
                                                            @if($instructor->media_avatar)
                                                                <img style="width:250px !important;height: 250px !important;border-radius: 50%;" src="{{ url('assets_public/files/image') . '/' . $instructor->media_avatar->file_name }}"  class="elementor-animation-bounce-in attachment-large size-large smartify lazyloaded" alt="" >
                                                            @else
                                                                -
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

{{--                                                <div class="elementor-element elementor-element-8e368b2 elementor-widget elementor-widget-text-editor" data-id="8e368b2" data-element_type="widget" data-widget_type="text-editor.default">--}}
{{--                                                    <div class="elementor-widget-container">--}}
{{--                                                        <div class="elementor-text-editor elementor-clearfix">--}}
{{--                                                            <h4 style="text-align: center;"><strong>BCBA, CAS, OBM, IBA</strong></h4>--}}
{{--                                                            <div></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

                                                <div class="elementor-element elementor-element-f0d425d elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="f0d425d" data-element_type="widget" data-widget_type="social-icons.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-social-icons-wrapper elementor-grid">
                                                            <span class="elementor-grid-item">
                                                                <a class="elementor-icon elementor-social-icon elementor-social-icon-envelope elementor-repeater-item-e384481" href="mailto:{{ $instructor->email }}" target="_blank">
                                                                    <span class="elementor-screen-only">Envelope</span>
                                                                    <i class="fas fa-envelope"></i>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>

                        <section style="background-color: #dddddd" class="pt-5 pb-5 elementor-section elementor-top-section elementor-element elementor-element-dd89bec elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dd89bec" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f43816a" data-id="f43816a" data-element_type="column">
                                        <div class="elementor-column-wrap elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-79aa8eb elementor-widget elementor-widget-Section" data-id="79aa8eb" data-element_type="widget" data-widget_type="Section.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="section-title">
                                                            <h2>My courses</h2>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="elementor-element elementor-element-571ccfb elementor-widget elementor-widget-eCademy_Courses" data-id="571ccfb" data-element_type="widget" data-widget_type="eCademy_Courses.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="container">
                                                            <div class="row">

                                                                @foreach($instructor->courses()->where('is_published', 1)->get() as $course)
                                                                    @include('@public._partials.course_card', ['course' => $course])
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
                        </section>
                    </div>
                </div>
            </div>
        </div><!-- .entry-content -->

    </div>

@endsection
