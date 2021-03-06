<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

            <li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('menus.backend.sidebar.dashboard') }}</span>
                </a>
            </li>

            @role('executive')
                 <li class="{{ active_class(Active::checkUriPattern('admin/quiz/*')) }} treeview">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>{{ trans('labels.backend.quiz.title') }}</span>
                    </a>

                    <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/quiz/*'), 'menu-open') }}" style="display: none; {{ active_class(Active::checkUriPattern('admin/quiz/*'), 'display: block;') }}">
                        <li class="{{ active_class(Active::checkUriPattern('admin/quiz/sets*')) }}">
                            <a href="{{ route('admin.quiz.sets.index') }}">
                                <i class="fa fa-circle-o"></i>
                                <span>{{ trans('labels.backend.quiz.set.management') }}</span>
                            </a>
                        </li>

                       {{--  <li class="{{ active_class(Active::checkUriPattern('admin/quiz/subjects*')) }}">
                            <a href="{{ route('admin.quiz.subjects.index') }}">
                                <i class="fa fa-circle-o"></i>
                                <span>{{ trans('labels.backend.quiz.subject.management') }}</span>
                            </a>
                        </li> --}}

                        <li class="{{ active_class(Active::checkUriPattern('admin/quiz/rules*')) }}">
                            <a href="{{ route('admin.quiz.rules.index') }}">
                                <i class="fa fa-circle-o"></i>
                                <span>{{ trans('labels.backend.quiz.rule.management') }}</span>
                            </a>
                        </li>

                        <li class="{{ active_class(Active::checkUriPattern('admin/quiz/boards*')) }}">
                            <a href="{{ route('admin.quiz.boards.index') }}">
                                <i class="fa fa-circle-o"></i>
                                <span>{{ trans('labels.backend.quiz.board.management') }}</span>
                            </a>
                        </li>

                    </ul>

                </li>
            @endauth

            <li class="header">{{ trans('menus.backend.sidebar.system') }}</li>

            @role(1)
            <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>{{ trans('menus.backend.access.title') }}</span>

                    @if ($pending_approval > 0)
                        <span class="label label-danger pull-right">{{ $pending_approval }}</span>
                    @else
                        <i class="fa fa-angle-left pull-right"></i>
                    @endif
                </a>

                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}" style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">
                    <li class="{{ active_class(Active::checkUriPattern('admin/access/user*')) }}">
                        <a href="{{ route('admin.access.user.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.access.users.management') }}</span>

                            @if ($pending_approval > 0)
                                <span class="label label-danger pull-right">{{ $pending_approval }}</span>
                            @endif
                        </a>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('admin/access/role*')) }}">
                        <a href="{{ route('admin.access.role.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('labels.backend.access.roles.management') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endauth

            <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer*')) }} treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>{{ trans('menus.backend.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'menu-open') }}" style="display: none; {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'display: block;') }}">
                    <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer')) }}">
                        <a href="{{ route('log-viewer::dashboard') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.dashboard') }}</span>
                        </a>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer/logs')) }}">
                        <a href="{{ route('log-viewer::logs.list') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.logs') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>