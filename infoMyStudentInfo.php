<?php
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['student'])){
        header("location: Student Login.php");
    }
?>
<?php include("header.php"); ?>

<!DOCTYPE html>
</nav>
<body>

  <body style='background-color: #ADD8E6'>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">

      <div class="mr-auto"></div>

      <ul class="navbar-nav">

        <?php
        
        include("includes/connection.php");
        $uname = $_SESSION['student'];
        $sql = "select * from student_information where id ='$uname'";
        $records = mysqli_query($connect, $sql) or die(mysqli_error($connect)); // fetch data from database
        $user_data = mysqli_fetch_array($records);

        ?>


        <?php
        $userName = $user_data[1];
        $userID = $user_data[2];
        $userCredits = $user_data[3];
        $userDep = $user_data[4];
        $userCg = $user_data[5];
        $userDOB = $user_data[6];
        $userInterest = $user_data[9];
        $userSup = $user_data[7];
        $userThesisStatus = $user_data[8];

        ?>

      </ul>
    </nav>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><a href='changeInterestStudent.php'>Change Your Interest</a></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Name : <?php echo "<b>" . $userName . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:3px;color: black;font-size:25px;">ID : <?php echo "<b>" .  $userID . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:3px;color: black;font-size:25px;">Credits : <?php echo "<b>" . $userCredits . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Department : <?php echo "<b>" . $userDep . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:3px;color: black;font-size:25px;">CGPA : <?php echo "<b>" .  $userCg . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:3px;color: black;font-size:25px;">DOB : <?php echo "<b>" . $userDOB . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Interests : <?php echo "<b>" . $userInterest . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Supervisor : <?php echo "<b>" . $userSup . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Thesis Status : <?php echo "<b>" . $userThesisStatus . "</b>" ?></h3>


    

  </body>
</html>

