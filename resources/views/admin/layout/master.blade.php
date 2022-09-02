@include('admin.include.header')
<body class="theme-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{asset('public/logo.png')}}" alt="Kwik E Mart"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <div id="wrapper">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href=""><img src="{{asset('public/logo.png')}}" alt="Logo" class="img-fluid logo"></a>
                        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>
                    <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
                </div>

                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href=""><i class="icon-settings"></i></a></li>
                            <li><a href="" class="icon-menu"><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div id="left-sidebar" class="sidebar">
            <div class="navbar-brand text-center">
                <a href=""><img src="{{asset('public/logo.png')}}" alt="Kwik E Mart Logo" class="img-fluid" width="90"></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
            </div>
            <div class="sidebar-scroll">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="active"><a href="{{route('admin/home')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="fa fa-users"></i><span>&nbsp; Users </span></a>
                            <ul>
                                <li><a href="{{ route('user.create') }}">Add Users</a></li>
                                <li><a href="{{ route('user.index') }}">All Users</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="icon-pencil"></i><span>Category Management</span></a>
                            <ul>
                                <li><a href="{{ route('category.index') }}">Main Categories</a></li>
                                <li><a href="{{ route('category.create') }}">Add Category</a></li>
                                <li><a href="{{ route('category.create.sub') }}">Add Sub Category</a></li>
                                <li><a href="{{ route('category.create.sub.sub') }}">Add Sub Sub Category</a></li>
                                <li><a href="{{ route('category.load_sub') }}">View Sub Category</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="icon-pencil"></i><span>Product Management</span></a>
                            <ul>
                                <li><a href="{{ route('products') }}">Products</a></li>
                                <li><a href="{{ route('products.create') }}">Add Product</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="icon-pencil"></i><span>Nutrition Management</span></a>
                            <ul>
                                <li><a href="{{ route('nutritions.index') }}">Nutritions</a></li>
                                <li><a href="{{ route('nutritions.create') }}">Add Nutrition</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="icon-pencil"></i><span>Tags Management</span></a>
                            <ul>
                                <li><a href="{{ route('tags.index') }}">Tags</a></li>
                                <li><a href="{{ route('tags.create') }}">Add Tag</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="icon-pencil"></i><span>Roles Management</span></a>
                            <ul>
                                <li><a href="{{ route('roles.index') }}">Roles</a></li>
                                <li><a href="{{ route('roles.create') }}">Add Role</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="icon-pencil"></i><span>Users to Roles Management</span></a>
                            <ul>
                                <li><a href="{{ route('userroles.create') }}">Assign Role</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="fa fa-car"></i><span>Retailer Management</span></a>
                            <ul>
                                <li><a href="{{ route('retailers.index') }}">Retailers</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#forms" class="has-arrow mb-1"><i class="fa fa-car"></i><span>Settings Management</span></a>
                            <ul>
                                <li><a href="">Settings</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="main-content">
            <div class="block-header">
                @yield('content')
            </div>
        </div>

    </div>

    @include('admin.include.footer')


</body>
</html>