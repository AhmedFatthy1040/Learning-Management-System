<?php
    require_once(__DIR__ . "/../../Controllers/ValidationController.php");
    require_once(__DIR__ . "/../../Controllers/UsersController.php");
    require_once(__DIR__ . "/../../Models/Question.php");
    use Controllers\ValidationController;
    use Controllers\UsersController;
    $Check = new ValidationController();
    $Access = $Check->CheckForMentor();
    if (!$Access)
        header("location:../Auth/logout.php");

$QuestionController = new UsersController();
    $ErrorMessage = "";
    if (isset($_POST["Question"])) {
        if (!empty($_POST["Question"])) {
            $Question = new Question();
            $Question->SetQuestion($_POST["Question"]);
            $Question->SetCorrectAnswer($_POST["CorrectAnswer"]);
            $Question->SetExamID($_POST["ExamID"]);
            if ($QuestionController->AddQuestion($Question)) {
                header("location: view_exam.php");
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
    <title>Add Mentor - LMS</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image"
                            style="background-image: url(&quot;../assets/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Add a Question</h4>
                            </div>
                            <!--                        ========================================================================-->
                            <form class="user" method="POST">
                                <div class="row mb-3">
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user"
                                        id="exampleInputBirthDate" aria-describedby="question"
                                        placeholder="Enter The Question ..." name="Question"></div>

                                <div class="mb-3"><input class="form-control form-control-user"
                                        id="exampleCorrectAnswer" aria-describedby="question"
                                        placeholder="Enter The Correct Answer ..." name="CorrectAnswer"></div>
                                <div class="row mb-3">

                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                                              id="exampleExamID" placeholder="Enter Exam ID" name="ExamID">
                                    </div>
                                </div>
                                <button class="btn btn-primary d-block btn-user w-100" type="submit">Add
                                    Question</button>

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