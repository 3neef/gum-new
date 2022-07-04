<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="me-1 font-weight-bold text-white">Gum</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse px-0 w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="{{ route("admin.home") }}">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text me-1">لوحة القيادة</span>
          </a>
        </li>
        @can('user_management_access')
        <li class="nav-item">
          <a class="nav-link " href="../pages/tables.html">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">table_view</i>
            </div>
            <span class="nav-link-text me-1">الجداول</span>
          </a>
          <ul class="c-sidebar-nav-dropdown-items">
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
                @can('customer_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.customers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-male c-sidebar-nav-icon">
        
                            </i>
                            {{ trans('cruds.customer.title') }}
                        </a>
                    </li>
                @endcan
                @can('operation_access')
                    <li class="c-sidebar-nav-dropdown {{ request()->is("admin/sales*") ? "c-show" : "" }} {{ request()->is("admin/swaps*") ? "c-show" : "" }}">
                        <a class="c-sidebar-nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-luggage-cart c-sidebar-nav-icon">
        
                            </i>
                            {{ trans('cruds.operation.title') }}
                        </a>
                        <ul class="c-sidebar-nav-dropdown-items">
                            @can('sale_access')
                                <li class="c-sidebar-nav-item">
                                    <a href="{{ route("admin.sales.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sales") || request()->is("admin/sales/*") ? "c-active" : "" }}">
                                        <i class="fa-fw fas fa-credit-card c-sidebar-nav-icon">
        
                                        </i>
                                        {{ trans('cruds.sale.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('swap_access')
                                <li class="c-sidebar-nav-item">
                                    <a href="{{ route("admin.swaps.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/swaps") || request()->is("admin/swaps/*") ? "c-active" : "" }}">
                                        <i class="fa-fw fas fa-exchange-alt c-sidebar-nav-icon">
        
                                        </i>
                                        {{ trans('cruds.swap.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('device_access')
                    <li class="c-sidebar-nav-dropdown {{ request()->is("admin/brands*") ? "c-show" : "" }} {{ request()->is("admin/phones*") ? "c-show" : "" }}">
                        <a class="c-sidebar-nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-mobile-alt c-sidebar-nav-icon">
        
                            </i>
                            {{ trans('cruds.device.title') }}
                        </a>
                        <ul class="c-sidebar-nav-dropdown-items">
                            @can('brand_access')
                                <li class="c-sidebar-nav-item">
                                    <a href="{{ route("admin.brands.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/brands") || request()->is("admin/brands/*") ? "c-active" : "" }}">
                                        <i class="fa-fw far fa-copyright c-sidebar-nav-icon">
        
                                        </i>
                                        {{ trans('cruds.brand.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('phone_access')
                                <li class="c-sidebar-nav-item">
                                    <a href="{{ route("admin.phones.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/phones") || request()->is("admin/phones/*") ? "c-active" : "" }}">
                                        <i class="fa-fw fas fa-mobile c-sidebar-nav-icon">
        
                                        </i>
                                        {{ trans('cruds.phone.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
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
        </ul>
        </li>
        @endcan
        <li class="nav-item">
          <a class="nav-link " href="../pages/billing.html">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text me-1">الفواتير</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/virtual-reality.html">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text me-1">الواقع الافتراضي</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/rtl.html">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text me-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/notifications.html">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text me-1">إشعارات</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">person</i>
            </div>
            <span class="nav-link-text me-1">حساب تعريفي</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-in.html">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">login</i>
            </div>
            <span class="nav-link-text me-1">تسجيل الدخول</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-up.html">
            <div class="text-white text-center ms-2 d-flex align-items-center justify-content-center">
              <i class="material-icons-round opacity-10">assignment</i>
            </div>
            <span class="nav-link-text me-1">اشتراك</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>