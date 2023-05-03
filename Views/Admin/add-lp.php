<?php
    require_once(__DIR__ . "/../../Controllers/ValidationController.php");
    require_once(__DIR__ . "/../../Controllers/UsersController.php");
    require_once(__DIR__ . "/../../Models/LearningPath.php");

    use Controllers\ValidationController;
    use Controllers\UsersController;
    $Check = new ValidationController();
    $Access = $Check->CheckForAdmin();
    if (!$Access)
        header("location:../Auth/logout.php");

    $conn = mysqli_connect('localhost', 'root', '', 'lms','3306');

    // check connection
    if(!$conn){
        echo 'Connection error: '. mysqli_connect_error();
    }

    $CoursesController = new UsersController();
    $ErrorMessage = "";

    if (isset($_POST["LPID"]) && isset($_POST["LPName"])) {
        if (!empty($_POST["LPID"]) && !empty($_POST["LPName"])) {
            $LP = new Learning_Path();
            $LP->setLearningPathName($_POST["LPName"]);
            $LP->setLearningPathId($_POST["LPID"]);

            $LPNAME = $LP->getLearningPathName();
            $LPID = $LP->getLearningPathId();

            $sql = "INSERT INTO learning_path(id,name) VALUES('$LPID','$LPNAME')";

            if (mysqli_query($conn, $sql)) {
                header('Location: manage-lp.php');
            } else {
                echo 'query error: ' . mysqli_error($conn);
            }

        }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add LP - LMS</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;../assets/img/dogs/image2.jpeg&quot;);"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Add a Learning Path</h4>
                        </div>
                        <!--                        ========================================================================-->
                        <form class="user" method="POST">
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleCourseName" placeholder="Learning path Name" name="LPName"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleMentorID" placeholder="Learning path ID" name="LPID"></div>
                            </div>
                            <button class="btn btn-primary d-block btn-user w-100" type="submit">Add</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/bs-init.js"></script>
<script src="../assets/js/theme.js"></script>
</body>

</html>