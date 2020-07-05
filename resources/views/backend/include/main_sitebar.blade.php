<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fas fa-store"></i> <span>Store Managment</span>
                    <i class="fa fa-angle-left pull-right"></i>

                </a>
                <ul class="treeview-menu">

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Brands<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('brands_view')}}"> All Brands</a></li>
                            <li><a href="{{route('brands_add')}}"> Add New Brand</a></li>

                        </ul>
                    </li>
                </ul>
                <ul class="treeview-menu">

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Categories<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('categories_view')}}"> All Categories</a></li>
                            <li><a href="{{route('categories_add')}}"> Add New Category</a></li>

                        </ul>
                    </li>
                </ul>
                <ul class="treeview-menu">

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Subcategories<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('subcategories_view')}}"> All Subcategories</a></li>
                            <li><a href="{{route('subcategories_add')}}"> Add New Subcategories</a></li>

                        </ul>
                    </li>
                </ul>
                <ul class="treeview-menu">

                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Products<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('product_view')}}"> All Products</a></li>
                            <li><a href="{{route('product_add')}}"> Add New Product</a></li>

                        </ul>
                    </li>
                </ul>



            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Sliders</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li><a href="{{route('sliders_view')}}"> All Sliders</a></li>
                    <li><a href="{{route('slider_add')}}"> Add New Slider</a></li>

                </ul>

            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    @if(Auth::user()->userType=='admin')
                    <li><a href="{{route('users_view')}}"> All Users</a></li>
                    <li><a href="{{route('users_add')}}"> Add New</a></li>
                    @endif
                    <li><a href="{{route('profile_view')}}"> Your Profile</a></li>

                </ul>

            </li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
