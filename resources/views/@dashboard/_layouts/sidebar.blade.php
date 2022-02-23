<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">

    @if(check_authority('use.dashboard'))
        <li class="navigation-header text-truncate"><span data-i18n="Apps">{{ trans('sidebar.Dashboard') }}</span></li>

        @if(check_authority('list.dashboard'))
        <li class="@if(Route::currentRouteName() == 'dashboard.index') active @endif nav-item">
            <a href="{{ route('dashboard.index') }}"><i class="bx bx-home"></i><span class="menu-title text-truncate" data-i18n="Email">{{ trans('sidebar.Home') }}</span></a>
        </li>
        @endif

    @endif

    @if(check_authority('use.security'))
        <li class="navigation-header text-truncate"><span data-i18n="Apps">{{ trans('sidebar.Security') }}</span></li>

        <li class="@if(
            Route::currentRouteName() == 'action.index' ||
            Route::currentRouteName() == 'screen.index' ||
            Route::currentRouteName() == 'group.index'
            ) active @endif nav-item">
            <a href="#"><i class="bx bx-file"></i><span class="menu-title text-truncate" data-i18n="Permissions">{{ trans('sidebar.Permissions') }}</span></a>
            <ul class="menu-content">
                @if(check_authority('list.action'))
                <li>
                    <a class="d-flex align-items-center" href="{{ route('action.index') }}">
                        <i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Actions">{{ trans('sidebar.Actions') }}</span>
                    </a>
                </li>
                @endif

                @if(check_authority('list.screen'))
                <li>
                    <a class="d-flex align-items-center" href="{{ route('screen.index') }}">
                        <i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Screens">{{ trans('sidebar.Screens') }}</span>
                    </a>
                </li>
                @endif

                @if(check_authority('list.group'))
                <li>
                    <a class="d-flex align-items-center" href="{{ route('group.index') }}">
                        <i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Groups">{{ trans('sidebar.Groups') }}</span>
                    </a>
                </li>
                @endif

            </ul>
        </li>

        @if(check_authority('list.user'))
        <li class="@if(Route::currentRouteName() == 'user.index') active @endif nav-item">
            <a href="{{ route('user.index') }}"><i class="bx bx-user"></i><span class="menu-title text-truncate" data-i18n="Users">{{ trans('sidebar.Users') }}</span></a>
        </li>
        @endif

        @if(check_authority('list.lookup'))
            <li class="@if(Route::currentRouteName() == 'lookup.index') active @endif nav-item">
                <a href="{{ route('lookup.index') }}"><i class="bx bx-laptop"></i><span class="menu-title text-truncate" data-i18n="Lookups">{{ trans('sidebar.Lookups') }}</span></a>
            </li>
        @endif

    @endif

    @if(check_authority('use.work_flow'))
        <li class="navigation-header text-truncate"><span data-i18n="Apps">{{ trans('sidebar.Work_Flow') }}</span></li>

        <li class="nav-item">
            <a href="#"><i class="bx bxs-edit-alt"></i><span class="menu-title text-truncate" data-i18n="Configuration">{{ trans('sidebar.configuration') }}</span></a>
            <ul class="menu-content">

                @if(check_authority('list.currency'))
                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="{{ route('currency.index') }}"><i class="bx bx-money"></i><span class="menu-title text-truncate" data-i18n="Currencies">{{ trans('sidebar.Currencies') }}</span></a>
                    </li>
                @endif

                @if(check_authority('list.social'))
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('social.index') }}"><i class="bx bxs-user-account"></i><span class="menu-title text-truncate" data-i18n="Socials">{{ trans('sidebar.Social_Accounts') }}</span></a>
                </li>
                @endif

                @if(check_authority('list.testimonial'))
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('testimonial.index') }}"><i class="bx bx-chat"></i><span class="menu-title text-truncate" data-i18n="Testimonials">{{ trans('sidebar.Testimonials') }}</span></a>
                </li>
                @endif

                @if(check_authority('list.setting'))
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('setting.index') }}"><i class="bx bx-edit-alt"></i><span class="menu-title text-truncate" data-i18n="Settings">{{ trans('sidebar.Settings') }}</span></a>
                </li>
                @endif

                @if(check_authority('list.translations'))
                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="{{ url('translations') }}"><i class="bx bxs-flag"></i><span class="menu-title text-truncate" data-i18n="Translation">{{ trans('sidebar.Translation') }}</span></a>
                    </li>
                @endif

            </ul>
        </li>

        @if(check_authority('list.media'))
            <li class="@if(Route::currentRouteName() == 'media.index') active @endif nav-item">
                <a href="{{ route('media.index') }}"><i class="bx bxs-file-plus"></i><span class="menu-title text-truncate" data-i18n="Media">{{ trans('sidebar.Media_center') }}</span></a>
            </li>
        @endif

        @if(check_authority('list.consultation'))
        <li class="@if(Route::currentRouteName() == 'consultation.index') active @endif nav-item">
            <a href="{{ route('consultation.index') }}"><i class="bx bx-user-pin"></i><span class="menu-title text-truncate" data-i18n="Consultations">{{ trans('sidebar.Consultations') }}</span></a>
        </li>
        @endif

        @if(check_authority('list.comment'))
        <li class="@if(Route::currentRouteName() == 'comment.index') active @endif nav-item">
            <a href="{{ route('comment.index') }}"><i class="bx bx-comment"></i><span class="menu-title text-truncate" data-i18n="Comments">{{ trans('sidebar.Comments') }}</span></a>
        </li>
        @endif

        <li class="nav-item">
            <a href="#"><i class="bx bx-check-shield"></i><span class="menu-title text-truncate" data-i18n="Course Flow">{{ trans('sidebar.Course_Flow') }}</span></a>
            <ul class="menu-content">
                @if(check_authority('list.instructor'))
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('instructor.index') }}"><i class="bx bx-briefcase"></i><span class="menu-title text-truncate" data-i18n="Instructors">{{ trans('sidebar.Instructors') }}</span></a>
                    </li>
                @endif
                @if(check_authority('list.course'))
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('course.index') }}"><i class="bx bx-chalkboard"></i><span class="menu-title text-truncate" data-i18n="Courses">{{ trans('sidebar.Courses') }}</span></a>
                    </li>
                @endif
                @if(check_authority('list.session'))
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('session.index') }}"><i class="bx bx-tag"></i><span class="menu-title text-truncate" data-i18n="Sessions">{{ trans('sidebar.Sessions') }}</span></a>
                    </li>
                @endif
                @if(check_authority('list.lesson'))
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('lesson.index') }}"><i class="bx bx-task"></i><span class="menu-title text-truncate" data-i18n="Lessons">{{ trans('sidebar.Lessons') }}</span></a>
                    </li>
                @endif
                @if(check_authority('list.student'))
                    <li>
                        <a class="d-flex align-items-center" href="{{ route('student.index') }}"><i class="bx bx-user-pin"></i><span class="menu-title text-truncate" data-i18n="Students">{{ trans('sidebar.Students') }}</span></a>
                    </li>
                @endif
            </ul>
        </li>

        <li class="nav-item">
            <a href="#"><i class="bx bx-shopping-bag"></i><span class="menu-title text-truncate" data-i18n="E-Commerce">{{ trans('sidebar.e_commerce') }}</span></a>
            <ul class="menu-content">

                @if(check_authority('list.instructor'))
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('book.index') }}"><i class="bx bx-book"></i><span class="menu-title text-truncate" data-i18n="Books">{{ trans('sidebar.Books') }}</span></a>
                </li>
                @endif

                @if(check_authority('list.instructor'))
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('order.index') }}"><i class="bx bx-cart"></i><span class="menu-title text-truncate" data-i18n="Books">{{ trans('sidebar.Orders') }}</span></a>
                </li>
                @endif

            </ul>
        </li>

    @endif

</ul>
