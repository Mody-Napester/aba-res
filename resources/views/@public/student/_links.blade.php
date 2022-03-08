<aside id="profile-sidebar">
    <div id="profile-nav">
        <ul class="lp-profile-nav-tabs">

            <li class="profile @if(Route::currentRouteName() == 'public.student.profile') active @endif">
                <a href="{{ route('public.student.profile') }}"><i class="fas fa-cog"></i>Profile</a>
            </li>

            <li class="courses @if(Route::currentRouteName() == 'public.student.courses') active @endif">
                <a href="{{ route('public.student.courses') }}"><i class="fas fa-book-open"></i>Courses</a>
            </li>

            <li class="certificates @if(Route::currentRouteName() == 'public.student.certificates') active @endif">
                <a href="{{ route('public.student.certificates') }}"><i class="fas fa-certificate"></i>Certificates</a>
            </li>

            <li class="quizzes @if(Route::currentRouteName() == 'public.student.quizzes') active @endif">
                <a href="{{ route('public.student.quizzes') }}"><i class="fas fa-puzzle-piece"></i>Quizzes</a>
            </li>

            <li class="orders @if(Route::currentRouteName() == 'public.student.orders') active @endif">
                <a href="{{ route('public.student.orders') }}"><i class="fas fa-shopping-cart"></i>Orders</a>
            </li>

            <li class="logout">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

            {{--    <li class="settings has-child active">--}}
            {{--        <a href=""><i class="fas fa-cog"></i>Settings</a>--}}
            {{--        --}}
            {{--        <ul class="profile-tab-sections">--}}

            {{--            <li class="basic-information active">--}}
            {{--                <a href="https://aba-resources.com/en/profile/a2@a.a/settings/basic-information/">--}}
            {{--                    <i class="fas fa-home"></i>									General								</a>--}}
            {{--            </li>--}}


            {{--            <li class="avatar">--}}
            {{--                <a href="https://aba-resources.com/en/profile/a2@a.a/settings/avatar/">--}}
            {{--                    <i class="fas fa-user-circle"></i>									Avatar								</a>--}}
            {{--            </li>--}}


            {{--            <li class="change-password">--}}
            {{--                <a href="https://aba-resources.com/en/profile/a2@a.a/settings/change-password/">--}}
            {{--                    <i class="fas fa-key"></i>									Password								</a>--}}
            {{--            </li>--}}


            {{--        </ul>--}}


            {{--    </li>--}}
        </ul>
    </div>
</aside>
