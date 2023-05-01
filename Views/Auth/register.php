<?php
require_once(__DIR__ . "/../../Controllers/AuthController.php");
require_once(__DIR__ . "/../../../Learning-Management-System/Models/User.php");
if (isset($_SESSION["UserID"])) {
    session_start();
}
$ErrorMessage = "";
if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    if (!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        $user = new User();
        $auth = new \Controllers\AuthController();
        $user->setFirstName($_POST["fname"]);
        $user->setLastName($_POST["lname"]);
        $user->setEmail($_POST["email"]);
        $user->SetPassword($_POST["password"]);
        if ($auth->regester($user)) {
            header("location: ../Student/dashboard.php");
        } else {
            $ErrorMessage = $_SESSION["ErrorMessage"];
        }
    } else
        $ErrorMessage = "Please Fill All Fields!";

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - LMS</title>
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
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <?php
                            if ($ErrorMessage != "") {
                                ?>
                                <div class="card text-white bg-danger shadow">
                                    <div class="card-body">
                                        <p class="m-0">
                                            <?php echo $ErrorMessage ?>
                                        </p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <form class="user" action="register.php" method="POST">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                            type="text" id="exampleFirstName" placeholder="First Name" name="fname">
                                    </div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text"
                                            id="exampleLastName" placeholder="Last Name" name="lname"></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address"
                                        name="email"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                            type="password" id="examplePasswordInput" placeholder="Password"
                                            name="password"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password"
                                            id="exampleRepeatPasswordInput" placeholder="Repeat Password"
                                            name="password_repeat"></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Register
                                    Account</button>
                                <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i
                                        class="fab fa-google"></i>&nbsp; Register with Google</a><a
                                    class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i
                                        class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center"><a class="small" href="login.php">Already have an account?
                                    Login!</a></div>
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