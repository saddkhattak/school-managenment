
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
  
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Home Page</a></li>
          </ul>
        </li>
        
        <?php
              if($_SESSION['usertype']=='admin')
              {
        ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>School Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="class.php"><i class="fa fa-circle-o"></i> Enter Class</a></li>
            <li><a href="class-record.php"><i class="fa fa-circle-o"></i> Class Details</a></li>
            <li><a href="subject.php"><i class="fa fa-circle-o"></i> Enter Subject</a></li>
            <li><a href="subject-record.php"><i class="fa fa-circle-o"></i> Subject Details</a></li>
             <li><a href="class-subject.php"><i class="fa fa-circle-o"></i> Select Class-Subject</a></li>
              <li><a href="class-subject-record.php"><i class="fa fa-circle-o"></i>Class-Subject Details</a></li>
          </ul>
        </li>

        <?php }?>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="student_records.php"><i class="fa fa-circle-o"></i> Student Details</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        
          <?php
               if($_SESSION['usertype']=='admin')
              {
          ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="accounts.php"><i class="fa fa-circle-o"></i> Registered User</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>

        </li>

          <?php }?>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="accout_update.php"><i class="fa fa-circle-o"></i> Profile Update</a></li>
            
          </ul>

        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Logout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="logout.php"><i class="fa fa-circle-o"></i> Logout from website</a></li>
            
          </ul>

        </li>


        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
