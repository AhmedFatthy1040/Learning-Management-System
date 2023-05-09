<?php
    require_once(__DIR__ . "/../../Controllers/ValidationController.php");
    require_once(__DIR__ . "/../../Controllers/UsersController.php");
    require_once(__DIR__ . "/../../Models/Exam.php");
    require_once(__DIR__ . "/../../Models/Question.php");
    use Controllers\ValidationController;
    use Controllers\UsersController;
    $Check = new ValidationController();
    $Access = $Check->CheckForMentor();
    if (!$Access)
        header("location:../Auth/logout.php");

    $Controller = new UsersController();
    $Courses = $Controller->GetCoursesForMentor($_SESSION["UserID"]);
    $ErrorMessage="";

    if (isset($_POST["ExamGrade"]) && isset($_POST["ExamDuration"]) && isset($_POST["Question1"]) && isset($_POST["Question2"]) && isset($_POST["Question3"]) && isset($_POST["Question4"]) && isset($_POST["Question5"]) && isset($_POST["Question6"]) && isset($_POST["Question7"]) && isset($_POST["Question8"]) && isset($_POST["Question8"]) && isset($_POST["Question9"]) && isset($_POST["Question10"]) && isset($_POST["Question1FirstAnswer"]) && isset($_POST["Question1secondAnswer"]) && isset($_POST["Question1ThirdAnswer"]) && isset($_POST["Question1fourthAnswer"]) && isset($_POST["Question1CorrectAnswer"]) && isset($_POST["Question2FirstAnswer"]) && isset($_POST["Question2secondAnswer"]) && isset($_POST["Question2ThirdAnswer"]) && isset($_POST["Question2fourthAnswer"]) && isset($_POST["Question2CorrectAnswer"]) && isset($_POST["Question3FirstAnswer"]) && isset($_POST["Question3secondAnswer"]) && isset($_POST["Question3ThirdAnswer"]) && isset($_POST["Question3fourthAnswer"]) && isset($_POST["Question3CorrectAnswer"]) && isset($_POST["Question4FirstAnswer"]) && isset($_POST["Question4secondAnswer"]) && isset($_POST["Question4ThirdAnswer"]) && isset($_POST["Question4fourthAnswer"]) && isset($_POST["Question4CorrectAnswer"]) && isset($_POST["Question5FirstAnswer"]) && isset($_POST["Question5secondAnswer"]) && isset($_POST["Question5ThirdAnswer"]) && isset($_POST["Question5fourthAnswer"]) && isset($_POST["Question5CorrectAnswer"]) && isset($_POST["Question6FirstAnswer"]) && isset($_POST["Question6secondAnswer"]) && isset($_POST["Question6ThirdAnswer"]) && isset($_POST["Question6fourthAnswer"]) && isset($_POST["Question6CorrectAnswer"]) && isset($_POST["Question7FirstAnswer"]) && isset($_POST["Question7secondAnswer"]) && isset($_POST["Question7ThirdAnswer"]) && isset($_POST["Question7fourthAnswer"]) && isset($_POST["Question7CorrectAnswer"]) && isset($_POST["Question8FirstAnswer"]) && isset($_POST["Question8secondAnswer"]) && isset($_POST["Question8ThirdAnswer"]) && isset($_POST["Question1fourthAnswer"]) && isset($_POST["Question8CorrectAnswer"]) && isset($_POST["Question9FirstAnswer"]) && isset($_POST["Question9secondAnswer"]) && isset($_POST["Question9ThirdAnswer"]) && isset($_POST["Question9fourthAnswer"]) && isset($_POST["Question10CorrectAnswer"]) && isset($_POST["Question10FirstAnswer"]) && isset($_POST["Question10secondAnswer"]) && isset($_POST["Question10ThirdAnswer"]) && isset($_POST["Question10fourthAnswer"]) && isset($_POST["Question10CorrectAnswer"])) {
        if (!empty($_POST["ExamGrade"]) && !empty($_POST["ExamDuration"]) && !empty($_POST["Question1"]) && !empty($_POST["Question2"]) && !empty($_POST["Question3"]) && !empty($_POST["Question4"]) && !empty($_POST["Question5"]) && !empty($_POST["Question6"]) && !empty($_POST["Question7"]) && !empty($_POST["Question8"]) && !empty($_POST["Question8"]) && !empty($_POST["Question9"]) && !empty($_POST["Question10"]) && !empty($_POST["Question1FirstAnswer"]) && !empty($_POST["Question1secondAnswer"]) && !empty($_POST["Question1ThirdAnswer"]) && !empty($_POST["Question1fourthAnswer"]) && !empty($_POST["Question1CorrectAnswer"]) && !empty($_POST["Question2FirstAnswer"]) && !empty($_POST["Question2secondAnswer"]) && !empty($_POST["Question2ThirdAnswer"]) && !empty($_POST["Question2fourthAnswer"]) && !empty($_POST["Question2CorrectAnswer"]) && !empty($_POST["Question3FirstAnswer"]) && !empty($_POST["Question3secondAnswer"]) && !empty($_POST["Question3ThirdAnswer"]) && !empty($_POST["Question3fourthAnswer"]) && !empty($_POST["Question3CorrectAnswer"]) && !empty($_POST["Question4FirstAnswer"]) && !empty($_POST["Question4secondAnswer"]) && !empty($_POST["Question4ThirdAnswer"]) && !empty($_POST["Question4fourthAnswer"]) && !empty($_POST["Question4CorrectAnswer"]) && !empty($_POST["Question5FirstAnswer"]) && !empty($_POST["Question5secondAnswer"]) && !empty($_POST["Question5ThirdAnswer"]) && !empty($_POST["Question5fourthAnswer"]) && !empty($_POST["Question5CorrectAnswer"]) && !empty($_POST["Question6FirstAnswer"]) && !empty($_POST["Question6secondAnswer"]) && !empty($_POST["Question6ThirdAnswer"]) && !empty($_POST["Question6fourthAnswer"]) && !empty($_POST["Question6CorrectAnswer"]) && !empty($_POST["Question7FirstAnswer"]) && !empty($_POST["Question7secondAnswer"]) && !empty($_POST["Question7ThirdAnswer"]) && !empty($_POST["Question7fourthAnswer"]) && !empty($_POST["Question7CorrectAnswer"]) && !empty($_POST["Question8FirstAnswer"]) && !empty($_POST["Question8secondAnswer"]) && !empty($_POST["Question8ThirdAnswer"]) && !empty($_POST["Question1fourthAnswer"]) && !empty($_POST["Question8CorrectAnswer"]) && !empty($_POST["Question9FirstAnswer"]) && !empty($_POST["Question9secondAnswer"]) && !empty($_POST["Question9ThirdAnswer"]) && !empty($_POST["Question9fourthAnswer"]) && !empty($_POST["Question10CorrectAnswer"]) && !empty($_POST["Question10FirstAnswer"]) && !empty($_POST["Question10secondAnswer"]) && !empty($_POST["Question10ThirdAnswer"]) && !empty($_POST["Question10fourthAnswer"]) && !empty($_POST["Question10CorrectAnswer"])) {
            $Exam = new Exam();
            $Exam->addQuestion1($_POST["Question1"]);
            $Exam->addQuestion2($_POST["Question2"]);
            $Exam->setQuestion3($_POST["Question3"]);
            $Exam->setQuestion4($_POST["Question4"]);
            $Exam->setQuestion5($_POST["Question5"]);
            $Exam->setQuestion6($_POST["Question6"]);
            $Exam->setQuestion7($_POST["Question7"]);
            $Exam->setQuestion8($_POST["Question8"]);
            $Exam->setQuestion9($_POST["Question9"]);
            $Exam->setQuestion10($_POST["Question10"]);

            if ($CoursesController->AddCourses($Exam)) {
                header("location: dashboard.php");
            }
            else {
                $ErrorMessage =  "Error!.. Please Try Again";
            }
        }
        else
            $ErrorMessage = "Error";
    }
    else
        $ErrorMessage = "Error";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mentor Dashboard - LMS</title>
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
                    <li class="nav-item"><a class="nav-link" href="profile.php"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="mange_course.php"><i
                                class="fas fa-table"></i><span>manage course</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="add-course.php"><i class="fas fa-table"></i><span>add
                                course</span></a></li>
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
<<<<<<< HEAD
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $_SESSION["UserName"]; ?></span><img
                                            class="border rounded-circle img-profile"
                                            src="../assets/img/avatars/gear.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="profile.php"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity
                                            log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item"
                                            href="../Auth/logout.php"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
=======
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $_SESSION["UserName"]; ?></span><img class="border rounded-circle img-profile" src="../assets/img/avatars/gear.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="profile.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="../Auth/logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
>>>>>>> 26ec27d0477b0384940007d1cf084c3850118fb1
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0"><?php echo "Add exam"?></h3>
                    </div>
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">Add Exam</h4>
                                        </div>
                                        <!--                        ========================================================================-->
                                        <form class="user" method="POST">

                                            <div class="row mb-3">
                                                <div class="col-sm-6 mb-3 mb-sm-0"><input
                                                        class="form-control form-control-user" type="text"
                                                        id="exampleExamGrade" placeholder="Exam's Grade"
                                                        name="ExamGrade"></div>
                                                <div class="col-sm-6 mb-3 mb-sm-0"><input
                                                        class="form-control form-control-user" type="text"
                                                        id="exampleExamDuration" placeholder="Duration"
                                                        name="ExamDuration"></div>
                                            </div>

                                            <div class="row mb-3">

                                                <div class="Question1">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion1"
                                                            aria-describedby="Question1" placeholder="Question 1"
                                                            name="Question1"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion1FirstAnswer"
                                                            aria-describedby="Question1FirstAnswer"
                                                            placeholder="Answer 1" name="Question1FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion1SecondAnswer"
                                                            aria-describedby="Question1SecondAnswer"
                                                            placeholder="Answer 2" name="Question1SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion1ThirdAnswer"
                                                            aria-describedby="Question1ThirdAnswer"
                                                            placeholder="Answer 3" name="Question1ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion1FourthAnswer"
                                                            aria-describedby="Question1FourthAnswer"
                                                            placeholder="Answer 4" name="Question1FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion1CorrectAnswer"
                                                            aria-describedby="Question1CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question1CorrectAnswer">
                                                            <optgroup lable="Correct Answer">
                                                                <option value="FirstAnswer">First Answer</option>
                                                                <option value="SecondAnswer">Second Answer</option>
                                                                <option value="ThirdAnswer">Third Answer</option>
                                                                <option value="FourthAnswer">Fourth Answer</option>
                                                            </optgroup>
                                                    </div>
                                                </div>

                                                <div class="Question2">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion2"
                                                            aria-describedby="Question2" placeholder="Question 2"
                                                            name="Question2"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion2FirstAnswer"
                                                            aria-describedby="Question2FirstAnswer"
                                                            placeholder="Answer 1" name="Question2FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion2SecondAnswer"
                                                            aria-describedby="Question2SecondAnswer"
                                                            placeholder="Answer 2" name="Question2SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion2ThirdAnswer"
                                                            aria-describedby="Question2ThirdAnswer"
                                                            placeholder="Answer 3" name="Question2ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion2FourthAnswer"
                                                            aria-describedby="Question2FourthAnswer"
                                                            placeholder="Answer 4" name="Question2FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion2CorrectAnswer"
                                                            aria-describedby="Question2CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question2CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>

                                                <div class="Question3">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion3"
                                                            aria-describedby="Question3" placeholder="Question 3"
                                                            name="Question3"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion3FirstAnswer"
                                                            aria-describedby="Question3FirstAnswer"
                                                            placeholder="Answer 1" name="Question3FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion3SecondAnswer"
                                                            aria-describedby="Question3SecondAnswer"
                                                            placeholder="Answer 2" name="Question3SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion3ThirdAnswer"
                                                            aria-describedby="Question3ThirdAnswer"
                                                            placeholder="Answer 3" name="Question3ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion3FourthAnswer"
                                                            aria-describedby="Question3FourthAnswer"
                                                            placeholder="Answer 4" name="Question3FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion3CorrectAnswer"
                                                            aria-describedby="Question3CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question3CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>

                                                <div class="Question4">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion4"
                                                            aria-describedby="Question4" placeholder="Question 4"
                                                            name="Question4"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion4FirstAnswer"
                                                            aria-describedby="Question4FirstAnswer"
                                                            placeholder="Answer 1" name="Question4FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion4SecondAnswer"
                                                            aria-describedby="Question4SecondAnswer"
                                                            placeholder="Answer 2" name="Question4SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion4ThirdAnswer"
                                                            aria-describedby="Question4ThirdAnswer"
                                                            placeholder="Answer 3" name="Question4ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion4FourthAnswer"
                                                            aria-describedby="Question4FourthAnswer"
                                                            placeholder="Answer 4" name="Question4FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion4CorrectAnswer"
                                                            aria-describedby="Question4CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question4CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>

                                                <div class="Question5">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion5"
                                                            aria-describedby="Question5" placeholder="Question 5"
                                                            name="Question5"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion5FirstAnswer"
                                                            aria-describedby="Question5FirstAnswer"
                                                            placeholder="Answer 1" name="Question5FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion5SecondAnswer"
                                                            aria-describedby="Question5SecondAnswer"
                                                            placeholder="Answer 2" name="Question5SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion5ThirdAnswer"
                                                            aria-describedby="Question5ThirdAnswer"
                                                            placeholder="Answer 3" name="Question5ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion5FourthAnswer"
                                                            aria-describedby="Question5FourthAnswer"
                                                            placeholder="Answer 4" name="Question5FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion5CorrectAnswer"
                                                            aria-describedby="Question5CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question5CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>

                                                <div class="Question6">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion6"
                                                            aria-describedby="Question6" placeholder="Question 6"
                                                            name="Question6"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion6FirstAnswer"
                                                            aria-describedby="Question6FirstAnswer"
                                                            placeholder="Answer 1" name="Question6FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion6SecondAnswer"
                                                            aria-describedby="Question6SecondAnswer"
                                                            placeholder="Answer 2" name="Question6SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion6ThirdAnswer"
                                                            aria-describedby="Question6ThirdAnswer"
                                                            placeholder="Answer 3" name="Question6ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion6FourthAnswer"
                                                            aria-describedby="Question6FourthAnswer"
                                                            placeholder="Answer 4" name="Question6FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion6CorrectAnswer"
                                                            aria-describedby="Question6CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question6CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>

                                                <div class="Question7">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion7"
                                                            aria-describedby="Question7" placeholder="Question 7"
                                                            name="Question7"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion7FirstAnswer"
                                                            aria-describedby="Question7FirstAnswer"
                                                            placeholder="Answer 1" name="Question7FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion7SecondAnswer"
                                                            aria-describedby="Question7SecondAnswer"
                                                            placeholder="Answer 2" name="Question7SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion7ThirdAnswer"
                                                            aria-describedby="Question7ThirdAnswer"
                                                            placeholder="Answer 3" name="Question7ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion7FourthAnswer"
                                                            aria-describedby="Question7FourthAnswer"
                                                            placeholder="Answer 4" name="Question7FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion7CorrectAnswer"
                                                            aria-describedby="Question7CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question7CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>

                                                <div class="Question8">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion8"
                                                            aria-describedby="Question8" placeholder="Question 8"
                                                            name="Question8"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion8FirstAnswer"
                                                            aria-describedby="Question8FirstAnswer"
                                                            placeholder="Answer 1" name="Question8FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion8SecondAnswer"
                                                            aria-describedby="Question8SecondAnswer"
                                                            placeholder="Answer 2" name="Question8SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion8ThirdAnswer"
                                                            aria-describedby="Question8ThirdAnswer"
                                                            placeholder="Answer 3" name="Question8ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion8FourthAnswer"
                                                            aria-describedby="Question8FourthAnswer"
                                                            placeholder="Answer 4" name="Question8FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion8CorrectAnswer"
                                                            aria-describedby="Question8CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question8CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>

                                                <div class="Question9">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion9"
                                                            aria-describedby="Question9" placeholder="Question 9"
                                                            name="Question9"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion9FirstAnswer"
                                                            aria-describedby="Question9FirstAnswer"
                                                            placeholder="Answer 1" name="Question9FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion9SecondAnswer"
                                                            aria-describedby="Question9SecondAnswer"
                                                            placeholder="Answer 2" name="Question9SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion9ThirdAnswer"
                                                            aria-describedby="Question9ThirdAnswer"
                                                            placeholder="Answer 3" name="Question9ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion9FourthAnswer"
                                                            aria-describedby="Question9FourthAnswer"
                                                            placeholder="Answer 4" name="Question9FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion9CorrectAnswer"
                                                            aria-describedby="Question9CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question9CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>

                                                <div class="Question10">
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion10"
                                                            aria-describedby="Question10" placeholder="Question 10"
                                                            name="Question10"></div>

                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion10FirstAnswer"
                                                            aria-describedby="Question10FirstAnswer"
                                                            placeholder="Answer 1" name="Question10FirstAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion10SecondAnswer"
                                                            aria-describedby="Question10SecondAnswer"
                                                            placeholder="Answer 2" name="Question10SecondAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion10ThirdAnswer"
                                                            aria-describedby="Question10ThirdAnswer"
                                                            placeholder="Answer 3" name="Question10ThirdAnswer"></div>
                                                    <div class="mb-3"><input class="form-control form-control-user"
                                                            type="text" id="exampleQuestion10FourthAnswer"
                                                            aria-describedby="Question10FourthAnswer"
                                                            placeholder="Answer 4" name="Question10FourthAnswer"></div>

                                                    <div class="mb-3"><select class="form-control form-control-user"
                                                            id="exampleQuestion10CorrectAnswer"
                                                            aria-describedby="Question10CorrectAnswer"
                                                            placeholder="Correct Answer" name="Question10CorrectAnswer">
                                                            <option value="FirstAnswer">First Answer</option>
                                                            <option value="SecondAnswer">Second Answer</option>
                                                            <option value="ThirdAnswer">Third Answer</option>
                                                            <option value="FourthAnswer">Fourth Answer</option>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary d-block btn-user w-100"
                                                type="submit">Upload</button>

                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
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