  {{-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> --}}
    <aside class="main-sidebar elevation-4 sidebar-light-indigo">

        {{-- Brand Logo --}}
        <a href="/" class="brand-link">
            <img src="{{ asset('images/avatars/1.png') }}" alt="School Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Infinit | <b class="text-indigo">UM</b> AAPMS</span>
        </a>
  
        {{-- Sidebar --}}
        <div class="sidebar">
            {{-- Sidebar user Panel --}}
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('images/icons/male.png') }}" class="img-circle elevation-2"
                        style="width:30px;height:30px;" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}
                    </a>
                </div>
            </div>
  
            {{-- Sidebar Menu --}}
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                            <i class="fas fa-home nav-icon"></i>
                            <p>Home</p>
                        </a>
                    </li>
  
                    <li class="nav-item {{ request()->is('action-plans/*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ request()->is('action-plans/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                Action Plans
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ action('ActionPlanController@add') }}"
                                    class="nav-link {{ request()->is('action-plans/add') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create New</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ action('ActionPlanController@list') }}"
                                    class="nav-link {{ request()->is('action-plans/list') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Action Plans List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                    class="nav-link {{ request()->is('action-plans/list/pendings') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pendings</p>
                                    <span class="badge badge-dark right">12</span>
                                </a>
                            </li>
                        </ul>
                    </li>
  
                    @if (Auth::user()->user_type == 2 || Auth::user()->user_type == 3)
                        <li class="nav-item {{ request()->is('types/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->is('types/*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Types
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if (Auth::user()->user_type == 3)
                                    <li class="nav-item">
                                        <a href="{{ action('CollegeController@list') }}"
                                            class="nav-link {{ request()->is('types/colleges/list') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Colleges</p>
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ action('ProgramController@getPrograms') }}"
                                        class="nav-link {{ request()->is('types/programs/*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Programs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ action('InstitutionController@getInstitutions') }}"
                                        class="nav-link {{ request()->is('types/institutions/list') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Institutions</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
  
                    <li class="nav-item">
                        <a href="{{ action('FeedbackSourcesController@list') }}"
                            class="nav-link {{ request()->is('feedback-sources/list') ? 'active' : '' }}">
                            <i class="fas fa-archive nav-icon"></i>
                            <p>Feedback Sources</p>
                        </a>
                    </li>
  
                    @if (Auth::user()->manage_users == 1)
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <p>
                                    Manage Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create New</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Users' List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pending Users</p>
                                        <span class="badge badge-info right">12</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
  
                    @if (Auth::user()->view_reports == 1)
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="fas fa-chart-bar nav-icon"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                    @endif
  
                    @if (Auth::user()->user_type == 3)
                        <li class="nav-item">
                            <a href="/settings" class="nav-link {{ request()->is('/settings') ? 'active' : '' }}">
                                <i class="fas fa-cogs nav-icon"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </aside>
  