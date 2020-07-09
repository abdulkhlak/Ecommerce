
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">

    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class="side-menu animate-dropdown outer-bottom-xs">
        <div class="head">Top Category</div>
        <nav class="yamm megamenu-horizontal">
            <ul class="nav">

@foreach($categories as $category)
                <li class="dropdown menu-item"><a href="#" class="dropdown-toggle"
                                                  data-toggle="dropdown">{{$category->category_name}}</a>
                    <ul class="dropdown-menu mega-menu">
                        <li class="yamm-content">
                            <div class="row">

                                @foreach($category->sub_categories as $subcategory)
                                <div class="col-sm-12 col-md-3">
                                    <ul class="links list-unstyled">
                                        <li><a href="{{route('category', $subcategory->subcat_slug)
                                        }}">{{$subcategory->subcat_name}}</a></li>

                                    </ul>
                                </div>

                                @endforeach


                                <!-- /.col -->

                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- /.yamm-content -->
                    </ul>
                    <!-- /.dropdown-menu --> </li>
                @endforeach
                <!-- /.menu-item -->



            </ul>
            <!-- /.nav -->
        </nav>
        <!-- /.megamenu-horizontal -->
    </div>
    <!-- /.side-menu -->
    <!-- ================================== TOP NAVIGATION : END ================================== -->

</div>
<!-- /.sidemenu-holder -->
