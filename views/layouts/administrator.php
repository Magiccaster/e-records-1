<?php $this->load->view('partials/header.php'); ?>

<div class="wrapper ">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/e-records/admin/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo base_url('resources/assets/img/logo.png'); ?>" class="user-image" id="logo-header" alt="User Image" > </span>
      <!-- logo for regular state and mobile devices -->
      <div class="logo-display"> 
        <img src="<?php echo base_url('resources/assets/img/logo.png'); ?>" class="user-image" id="logo-header" alt="User Image" > 
        <span>E-Records</span>
      </div>
      
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <i class="fa fa-user-circle"></i>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu custom-dropdown-admin">
              <!-- Menu Footer-->
              <li class='header'>
                  <a href="#" class="text-center"><i class="glyphicon glyphicon-log-out"></i> Sign out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Main Navigation</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="treeview">
          <a href="#"><i class="fa fa-user-o"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/e-records/admin/teacher"><i class="fa fa-circle-o"></i>Teachers</a></li>
            <li><a href="/e-records/admin/student"><i class="fa fa-circle-o"></i>Students</a></li>
            <li><a href="/e-records/admin/parent"><i class="fa fa-circle-o"></i>Parents</a></li>
          </ul>
        </li>
        <li><a href="/e-records/admin/section"><i class="fa fa-group "></i> <span>Section</span></a></li>
        <li><a href="/e-records/admin/classroom"><i class="fa fa-building-o "></i> <span>Class Room</span></a></li>
        <li><a href="/e-records/admin/classroute"><i class="fa fa-life-ring"></i> <span>Class Routing</span></a></li>
        <li><a href="/e-records/admin/subject"><i class="fa fa-book"></i><span>Subject</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <?php echo @$yield;?>


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#"> &nbsp; E-Records </a>.</strong> &nbsp; All rights reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('partials/footer.php'); ?>