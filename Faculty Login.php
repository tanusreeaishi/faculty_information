<?php require("includes/connection.php");

?>
<?php include("includes/header.php"); ?>
<html>

<head>
    <meta charset="UTF-8">

    <title>Faculty Information Management System</title>

<body style='background-color: #ADD8E6'>
    </head>


    <?php
   
    $SUCC = True;
    if (isset($_POST['login'])) {
        $uname = $_POST['FacultyEmail'];
        $pass = $_POST['FacultyPass'];

        $query = "SELECT * FROM faculty_credentials WHERE uname= '$uname' AND pass ='$pass'";
        $res = mysqli_query($connect, $query);
        if (mysqli_num_rows($res) == 1) {
            session_start();
            $_SESSION['FacultyLoginId'] = $uname;
            header("location: Faculty Dashboard.php");
            echo "Hi";
        } else {
            $SUCC = False;
            echo "<script>alart('Invalid Faculty Email or Password')</script>";
        }
    }

    ?>

    <body>
        



        <div class="container">
            <div class="col-md-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 shadow-sm" style="margin-top:100px;">
                        <form method="post">
                            <?php

                            ?>
                            <h3 class="text-center my-3">Faculty Login</h3>

                            <label>Faculty Email</label>
                            <input type="text" name="FacultyEmail" class="form-control my-2" placeholder="Enter Email" autocomplete="off">


                            <label>Password</label>
                            <input type="password" name="FacultyPass" class="form-control my-2" placeholder="Enter Password">

                        
                            <input type="submit" name="login" class="btn btn-success" value="Login">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>