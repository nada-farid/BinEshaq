<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('slider_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.sliders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sliders") || request()->is("admin/sliders/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-images c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.slider.title') }}
                </a>
            </li>
        @endcan
        @can('experience_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.experiences.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/experiences") || request()->is("admin/experiences/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-address-card c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.experience.title') }}
                </a>
            </li>
        @endcan
        @can('service_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.service.title') }}
                </a>
            </li>
        @endcan
        @can('project_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.projects.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/projects") || request()->is("admin/projects/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-project-diagram c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.project.title') }}
                </a>
            </li>
        @endcan
        @can('product_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.products.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : "" }}">
                    <i class="fa-fw fab fa-product-hunt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.product.title') }}
                </a>
            </li>
        @endcan
        @can('news_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.news.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/news") || request()->is("admin/news/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-newspaper c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.news.title') }}
                </a>
            </li>
        @endcan
        @can('about_us_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.aboutuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/aboutuses") || request()->is("admin/aboutuses/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-question-circle c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.aboutUs.title') }}
                </a>
            </li>
        @endcan
        @can('contact_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/appointments*") ? "c-show" : "" }} {{ request()->is("admin/employments*") ? "c-show" : "" }} {{ request()->is("admin/contactus*") ? "c-show" : "" }} {{ request()->is("admin/subscriptions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-phone c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contact.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('appointment_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.appointments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/appointments") || request()->is("admin/appointments/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-clock c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.appointment.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employment_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employments") || request()->is("admin/employments/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-tag c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employment.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('contactu_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contactus.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contactus") || request()->is("admin/contactus/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-toolbox c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contactu.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('subscription_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.subscriptions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/subscriptions") || request()->is("admin/subscriptions/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-envelope c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.subscription.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('distributor_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.distributors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/distributors") || request()->is("admin/distributors/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.distributor.title') }}
                </a>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>