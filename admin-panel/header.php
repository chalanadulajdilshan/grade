<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">

        <!-- Logo -->
        <div class="logo-lg">
            <span class="light-logo"><img src="../assets/images/log.png" alt="logo"></span>
        </div>
    </div>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="app-menu">

        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">

                <li class="btn-group d-lg-inline-flex d-none">
                    <div class="app-menu">
                        <div class="search-bx mx-5">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>


                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
                    <i class="ti-settings text-muted mr-2"></i> 
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                            <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a> 
                      
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="log-out.php"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">

                    <li>
                        <a href="index.php">
                            <i class='bx bxs-dashboard'></i>
                            <span>Dashboard</span>

                        </a>
                    </li>



                    <li class="treeview">
                        <a href="#">
                            <i class='bx bx-book-open'></i>
                            <span>Subjects</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="create-subjects.php">
                                    <i class='bx bx-chevron-right'></i>Create Subject</a></li>
                            <li> <a href="manage-grades.php">
                                    <i class='bx bx-chevron-right'></i>Manage Subjects</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class='bx bxs-calendar'></i>
                            <span>News</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="create-news.php">
                                    <i class='bx bx-chevron-right'></i>Create News</a></li>
                            <li><a href="manage-news.php">
                                    <i class='bx bx-chevron-right'></i>Manage News</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="manage-student-by-grades.php">
                            <i class='bx bx-user-pin'></i>
                            <span>Manage Students</span>
                        </a>
                    </li>

                    <li>
                        <a href="manage-grades-by-payments.php">
                            <i class='bx bx-money'></i>
                            <span>Manage Students Payments</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>

</aside>