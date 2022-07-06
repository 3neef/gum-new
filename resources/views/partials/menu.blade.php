<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-end me-3 rotate-caret  bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute start-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{route('admin.home')}}" target="_blank">
        <div style="display: flex;justify-content:center;align-items:center">
            <img src="/images/gum-logo.png" class="w-40 h-40" alt="main_logo">
            
        </div>
        
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
            <span class="nav-link-text me-1">لوحة التحكم</span>
          </a>
        </li>
                @can('customer_access')
                <li class="nav-item">
                    <a href="{{ route("admin.customers.index") }}" class="nav-link {{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-male c-sidebar-nav-icon">

                        </i>
                        {{ trans('cruds.customer.title') }}
                    </a>
                </li>
                @endcan
                @can('sale_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.sales.index") }}" class="nav-link {{ request()->is("admin/sales") || request()->is("admin/sales/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-credit-card c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.sale.title') }}
                        </a>
                    </li>
                @endcan
                @can('swap_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.swaps.index") }}" class="nav-link {{ request()->is("admin/swaps") || request()->is("admin/swaps/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-exchange-alt c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.swap.title') }}
                        </a>
                    </li>
                @endcan
                @can('brand_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.brands.index") }}" class="nav-link {{ request()->is("admin/brands") || request()->is("admin/brands/*") ? "c-active" : "" }}">
                            <i class="fa-fw far fa-copyright c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.brand.title') }}
                        </a>
                    </li>
                @endcan
                @can('phone_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.phones.index") }}" class="nav-link {{ request()->is("admin/phones") || request()->is("admin/phones/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-mobile c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.phone.title') }}
                        </a>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ __('تغيير كلمة السر') }}
                        </a>
                    </li>
                @endcan
                @endif
                @can('user_management_access')
                <li class="nav-item {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}" disabled>
                    <a class="nav-link" href="#">
                        <i class="fa-fw fas fa-users c-sidebar-nav-icon">
    
                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <hr class="horizontal my-0">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                    <i class="fa-fw fas fa-unlock-alt  c-sidebar-nav-icon">
    
                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                    <i class="fa-fw fas fa-briefcase  c-sidebar-nav-icon">
    
                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                    <i class="fa-fw fas fa-user  c-sidebar-nav-icon">
    
                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    
                </li>
            @endcan
            </ul>
        </li>
      </ul>
    </div>
  </aside>