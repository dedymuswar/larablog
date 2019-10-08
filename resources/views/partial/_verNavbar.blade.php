<nav class="hk-nav hk-nav-dark">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i
                data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('dashboard.index')}}">
                        <i class="ion ion-ios-keypad"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('user*') ? 'active' : '' }}">
                    <a class="nav-link" data-target="#auth_drp" href="{{route('user.index')}}">
                        <i class="ion ion-ios-person-add"></i>
                        <span class="nav-link-text">Manage User</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('post*') ? 'active' : '' }}">
                    <a class="nav-link" data-target="#auth_drp" href="{{route('post.index')}}">
                        <i class="ion ion-ios-list-box"></i>
                        <span class="nav-link-text">Posts</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('category*') ? 'active' : '' }}">
                    <a class="nav-link" data-target="#auth_drp" href="{{route('category.index')}}">
                        <i class="ion ion-ios-pricetags"></i>
                        <span class="nav-link-text">Category</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('tag*') ? 'active' : '' }}">
                    <a class="nav-link" data-target="#auth_drp" href="{{route('tag.index')}}">
                        <i class="ion ion-ios-attach"></i>
                        <span class="nav-link-text">Tags</span>
                    </a>
                </li>
            </ul>
            <hr class="nav-separator">
            <div class="nav-header">
                <span>User Interface</span>
                <span>UI</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                        <i class="ion ion-ios-construct"></i>
                        <span class="nav-link-text">Utilities</span>
                    </a>
                    <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="background.html">Background</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="border.html">Border</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="colors.html">Colors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="embeds.html">Embeds</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons.html">Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="shadow.html">Shadow</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sizing.html">Sizing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="spacing.html">Spacing</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>