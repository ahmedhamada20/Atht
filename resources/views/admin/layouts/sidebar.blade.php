<aside class="main-sidebar">
    <div class="user-profile">
        <div class="profile-pic">
            <img src="{{ asset('dash/images/user5-128x128.jpg') }}" alt="user">
            <div class="profile-info text-white">
                <h4>John Doe</h4>
                <div class="list-icons-item dropdown">
                    <a href="#" class="list-icons-item dropdown-toggle text-white-50 hover-primary" data-bs-toggle="dropdown"><span class="badge badge-ring fill badge-primary mx-2"></span>Online</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Update data</a>
                        <a href="#" class="dropdown-item">Detailed log</a>
                        <a href="#" class="dropdown-item">Statistics</a>
                        <a href="#" class="dropdown-item">Clear list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a href="{{ route('admin') }}"><i data-feather="monitor"></i><span>Dashboard</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="grid"></i>
                            <span>الاعدادات الرئسيه</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('setting') }}"><i class="icon-Commit {{ request()->is('setting') ? ' active' : null }}"><span class="path1"></span><span class="path2"></span></i>اعدادات الموقع</a></li>
                            <li><a href="{{ route('status.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>حالات الطلبات</a></li>
                            <li><a href="{{ route('color.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اللوان المنتجات</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="edit"></i>
                            <span>السليدر</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('slider.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جميع السليدر</a></li>
                            <li><a href="{{ route('slider.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اضافه جديده</a></li>




                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="shopping-cart"></i>
                            <span>الفئات</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('category.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جميع الفئات الرئسيه</a></li>


                            <li><a href="{{ route('subCategory.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جميع الفئات الفرعيه</a></li>


                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="cast"></i>
                            <span>المنتجات</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('product.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جميع المنتجات</a></li>
                            <li><a href="{{ route('product.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اضافه منتج جديد</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="package"></i>
                            <span>احدث المجموعات</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('latestCollection.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اضافه جديده</a></li>
                            <li><a href="{{ route('latestCollection.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جميع البيانات</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="credit-card"></i>
                            <span>المقالات</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('blog.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جميع المقالات</a></li>
                            <li><a href="{{ route('blog.store') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اضافه مقاله جديده</a></li>

                        </ul>
                    </li>
                   
                </ul>

               
            </div>
        </div>
    </section>
</aside>
