<?php $url = url()->current();?>
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="{{ request()->is('admin/home') ? 'active' : '' }}" href="{{ url('/admin/home') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="{{ request()->is('admin/categories') ? 'active' : '' || request()->is('admin/categories/create') ? 'active' : ''}}">
                        <i class=" fa fa-list-alt"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub">
                        <li><a class="{{ request()->is('admin/categories') ? 'selected' : '' }}" href="{{url('admin/categories')}}">View Categories</a></li>
                        <li><a class="{{ request()->is('admin/categories/create') ? 'selected' : '' }}" href="{{url('/admin/categories/create')}}">Add Categories</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="{{ request()->is('admin/view-product') ? 'active' : '' || request()->is('admin/add-product') ? 'active' : ''}}">
                        <i class=" fa fa-list-alt"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub">
                        <li><a class="{{ request()->is('admin/view-product') ? 'selected' : '' }}" href="{{url('/admin/view-product')}}">View Products</a></li>
                        <li><a class="{{ request()->is('admin/add-product') ? 'selected' : '' }}" href="{{url('/admin/add-product')}}">Add Products</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                        <a href="javascript:;" class="{{ request()->is('admin/users') ? 'active' : '' || request()->is('admin/users/create') ? 'active' : ''}}">
                            <i class=" fa fa-list-alt"></i>
                            <span>Users</span>
                        </a>
                        <ul class="sub">
                            <li><a class="{{ request()->is('admin/users') ? 'selected' : '' }}" href="{{url('/admin/users')}}">View Users</a></li>
                            <li><a class="{{ request()->is('admin/users/create') ? 'selected' : '' }}" href="{{url('/admin/users/create')}}">Add Users</a></li>
                        </ul>
                </li>

                @can('role_list')
                <li class="sub-menu">
                    <a href="javascript:;" class="{{ request()->is('admin/roles') ? 'active' : '' || request()->is('admin/roles/create') ? 'active' : ''}}">
                        <i class=" fa fa-list-alt"></i>
                        <span>Roles</span>
                    </a>
                    <ul class="sub">
                        <li><a class="{{ request()->is('admin/roles') ? 'selected' : '' }}" href="{{url('/admin/roles')}}">View Roles</a></li>
                        @can('role_create')
                        <li><a class="{{ request()->is('admin/roles/create') ? 'selected' : '' }}" href="{{url('/admin/roles/create')}}">Add Roles</a></li>
                        @endcan
                    </ul>
                </li>                
                @endcan

                <li>
                    <a href="{{ url('/admin/settings') }}"  class="{{ request()->is('admin/settings') ? 'active' : '' }}">
                        <i class="fa fa-user"></i>
                        <span>Settings</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/admin/view_listing') }}"  class="{{ request()->is('admin/view_listing') ? 'active' : '' }}">
                        <i class="fa fa-user"></i>
                        <span>Ajax Crude</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ url('/admin/login') }}" class="{{ request()->is('admin/home') ? 'active' : '' }}">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>