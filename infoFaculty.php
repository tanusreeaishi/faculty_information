<?php
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['FacultyLoginId'])){
        header("location: Faculty Login.php");
    }
?>
<?php include("header1.php"); ?>

<!DOCTYPE html>
</nav>
<body>

  <body style='background-color: #ADD8E6'>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">

      <div class="mr-auto"></div>

      <ul class="navbar-nav">

        <?php
        
        include("includes/connection.php");
        $uname = $_SESSION['FacultyLoginId'];
        $sql = "select * from faculty_information where id ='$uname'";
        $records = mysqli_query($connect, $sql) or die(mysqli_error($connect)); // fetch data from database
        $user_data = mysqli_fetch_array($records);

        ?>


        <?php
        $userName = $user_data[1];
        $userInitial = $user_data[2];
        $userDes = $user_data[3];
        $userRoom = $user_data[4];
        $userDep = $user_data[5];
        $userScholar = $user_data[6];
        $userPhone = $user_data[7];

        ?>

      </ul>
    </nav>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><a href='changeMyFacultyInfo.php'>Change Your Information</a></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Name : <?php echo "<b>" . $userName . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:3px;color: black;font-size:25px;">Initial : <?php echo "<b>" .  $userInitial . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:3px;color: black;font-size:25px;">Designation : <?php echo "<b>" . $userDes . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Room Num : <?php echo "<b>" . $userRoom . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:3px;color: black;font-size:25px;">Department : <?php echo "<b>" .  $userDep . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:3px;color: black;font-size:25px;">Scholar Id : <?php echo "<b>" . $userScholar . "</b>" ?></h3>
    <h3 style="text-align:left;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Phone Num : <?php echo "<b>" . $userPhone . "</b>" ?></h3>

    

  </body>
</html>

