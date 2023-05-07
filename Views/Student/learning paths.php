<style>
    <?php
    include("../assets/bootstrap/css/Admin.css");
    include("css/LerningPath.css");
    session_start();
    ?>
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - LMS</title>
    <link rel="stylesheet" href="css/LerningPath.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>LMS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php"><i
                                class="fas fa-home"></i><span>Home</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="courses.php"><i
                                class="fas fa-home"></i><span>Courses</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="lecture.php"><i
                                class="fas fa-home"></i><span>Lectures</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.php"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="mentors.php"><i
                                class="fas fa-users"></i><span>Mentors</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="learning paths.php"><i
                                class="fas fa-book-open"></i><span>Learning Paths</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="transcript.php"><i
                                class="fas fa-table"></i><span>transcript</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text"
                                    placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i
                                        class="fas fa-search"></i></button></div>
                        </form>

                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                    aria-expanded="false" data-bs-toggle="dropdown" href="#"><i
                                        class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small"
                                                type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0"
                                                    type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="badge bg-danger badge-counter">3+</span><i
                                            class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a
                                            class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i
                                                        class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i
                                                        class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i
                                                        class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your
                                                    account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                            Alerts</a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="badge bg-danger badge-counter">7</span><i
                                            class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a
                                            class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle"
                                                    src="../assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can
                                                        help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle"
                                                    src="../assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last
                                                        month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle"
                                                    src="../assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am
                                                        very happy with the progress so far, keep up the good
                                                        work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle"
                                                    src="../assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is
                                                        because someone told me that people say this to all dogs, even
                                                        if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                            Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end"
                                    aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img
                                            class="border rounded-circle img-profile"
                                            src="../assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="section2" id="service">
                    <h3 class="title">Learning Pathes</h3>
                    <div class="contanre">
                        <a class="card" href="other courses in lerning path.php">
                            <div class="icon">
                                <i class="fa-brands fa-android"></i>
                            </div>
                            <div class="info">
                                <h3>Android </h3>
                                <p>Launch Your Android App Development Career. Master the knowledge and skills necessary
                                    to develop maintainable mobile computing apps</p>

                            </div>
                        </a>
                        <a class="card" href="">
                            <div class="icon">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <div class="info">
                                <h3>Front-end</h3>
                                <p>You will learn how front-end developers create websites and applications that work
                                    well and are easy to maintain</p>
                            </div>
                        </a>
                        <a class="card" href="">

                            <div class="icon">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <div class="info">
                                <h3>Back-end</h3>
                                <p>You’ll learn the latest tools and technologies used by professional back-end
                                    developers</p>
                            </div>
                        </a>
                        <a class="card" href="">

                            <div class="icon">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <div class="info">
                                <h3>Back-end</h3>
                                <p>You’ll learn the latest tools and technologies used by professional back-end
                                    developers</p>
                            </div>
                        </a>
                        </a>
                        <a class="card" href="">

                            <div class="icon">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <div class="info">
                                <h3>Back-end</h3>
                                <p>You’ll learn the latest tools and technologies used by professional back-end
                                    developers</p>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © LMS 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>