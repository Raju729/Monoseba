<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Welcome Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="{{url('admin')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Doctor</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/add-doctors')}}"><i class="fa fa-circle-o"></i> Add New Doctor</a></li>
                    <li><a href="{{url('admin/doctors')}}"><i class="fa fa-circle-o"></i> Doctor Details</a></li>
                    <li><a href=" "><i class="fa fa-circle-o"></i> Doctor extra</a></li>

                </ul>
            </li>
            <li class="treeview <?php if(isset($addmenu)) echo $addmenu ?>">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Patient</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu ">
                    <li class=" <?php if(isset($add_new_student)) echo $add_new_student ?>"><a href="{{url('admin/add-student')}}"><i class="fa fa-circle-o"></i> New Student Register</a></li>
                    <li class=" <?php if(isset($add_old_student)) echo $add_old_student ?>"><a href="{{url('admin/old-add-student')}}"><i class="fa fa-circle-o"></i>Old Student Register</a></li>
                    <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Student Details</a></li>
                    <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Student Admission</a></li>
                    <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Student Attendance</a></li>
                    <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i>Student Attendance Details</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>News & Blogs</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Publish News</a></li>
                    <li><a href="{{url('admin/posts/create')}}"><i class="fa fa-circle-o"></i> Add Blogs</a></li>
                    <li><a href="{{url('admin/posts')}}"><i class="fa fa-circle-o"></i> Manage Blogs</a></li>
                </ul>
            </li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Notice</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>Add Notice</a></li>
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>Notice Details</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Report</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>Patient Report</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Account</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Manage Income</a></li>
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Income Report Details</a></li>
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Manage Expenses</a></li>
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Expenses Report Details</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Authentication</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                </ul>
            </li>

            <li class="header">Configuration</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>config1</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>config2</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>config3</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>