    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link">

        <span class="brand-text font-weight-light">Little Learners | Admin </span>
      </a>
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/manager.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['uname']; ?></a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <?php if ($_SESSION['utype'] == 1) : ?>

              <!--Subadmins--->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Sub-Admins
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="add-subadmin.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="manage-subadmins.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Manage</p>
                    </a>
                  </li>

                </ul>
              </li>
            <?php endif; ?>




            <!----- Teachers--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Teachers
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="add-teacher.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="manage-teachers.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage</p>
                  </a>
                </li>



              </ul>
            </li>


            <!--Classes--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Classes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="add-class.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Class</p>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="manage-classes.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Class</p>
                  </a>
                </li>

                
                <li class="nav-item">
                  <a href="/admin/add-class-routine.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Routine</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/admin/manage-class-routine.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Routine</p>
                  </a>
                </li>
              </ul>
            </li>

            <!--Exam Routine--->
            <li class="nav-item">
              <a href="#" class="nav-link">
               <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Exam
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="/admin/add-exam-routine.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Routine</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/manage-exam-routine.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Manage Routine</p>
                  </a>
                </li>
              </ul>
            </li>

            <!--Enrollment--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Enrollment
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="new-enrollments.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="accepted-enrolment.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Accepted</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="rejected-enrolments.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rejected</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="all-enrolments.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All</p>
                  </a>
                </li>
              </ul>
            </li>




            <!--Visitors--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Visitors
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="new-visitors.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>New</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="visited-visitors.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Visited</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="notvisited-visitors.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Not Visited</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="all-visitors.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All</p>
                  </a>
                </li>
              </ul>
            </li>

            <!--Reports--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Pages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="aboutus.php" class="nav-link">
                    <i class="far fa-file-alt nav-icon"></i>
                    <p>About us</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="contact-us.php" class="nav-link">
                    <i class="fas fa-file nav-icon"></i>
                    <p>Contact us</p>
                  </a>
                </li>
              </ul>
            </li>



            <!--Profile--->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  Account Settings
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="profile.php" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>Profile</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="change-password.php" class="nav-link">
                    <i class="fas fa-cog nav-icon"></i>
                    <p>Change Password</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="logout.php" class="nav-link">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                  </a>
                </li>

              </ul>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>