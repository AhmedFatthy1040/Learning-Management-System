<?php
    require_once(__DIR__ . "/../../Controllers/ValidationController.php");
    require_once(__DIR__ . "/../../Controllers/UsersController.php");
    require_once(__DIR__ . "/../../Models/Mentor.php");
    use Controllers\ValidationController;
    use Controllers\UsersController;
    $Check = new ValidationController();
    $Access = $Check->CheckForAdmin();
    if (!$Access)
        header("location:../Auth/logout.php");

$MentorController = new UsersController();
    $ErrorMessage = "";

    if (isset($_POST["first_name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["salary"]) && isset($_POST["phone"])) {
        if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["salary"]) && !empty($_POST["phone"])) {
            $Mentor = new Mentor();
            $Mentor->setFirstName($_POST["first_name"]);
            $Mentor->setLastName($_POST["last_name"]);
            $Mentor->setEmail($_POST["email"]);
            $Mentor->setSalary($_POST["salary"]);
            $Mentor->SetPassword($_POST["password"]);
            $Mentor->setPhoneNumber($_POST["phone"]);
            $Mentor->setDateOfBirth($_POST["birthDate"]);
            $Mentor->setNationality($_POST["nationality"]);
            $Mentor->SetGender($_POST["gender"]);

            if ($MentorController->AddMentors($Mentor)) {
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
    <title>Add Mentor - LMS</title>
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
                            <h4 class="text-dark mb-4">Add a Mentor</h4>
                        </div>
<!--                        ========================================================================-->
                        <form class="user" method="POST">
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="first_name"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleLastName" placeholder="Last Name" name="last_name"></div>
                            </div>
                            <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_repeat"></div>

                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="salary" id="exampleSalary" placeholder="Salary" name="salary"></div>
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="phone" id="examplePhone" placeholder="Phone" name="phone"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="nationality" id="exampleNationality" placeholder="Nationality" name="nationality"></div>
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="gender" id="exampleGender" placeholder="Gender" name="gender"></div>
                            </div>
                            <div class="mb-3"><input class="form-control form-control-user" type="birthOfDate" id="exampleInputBirthDate" aria-describedby="birthDate" placeholder="Birth Date Like YYYY-MM-DD" name="birthDate"></div>
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