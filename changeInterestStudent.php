<?php
session_start();
session_regenerate_id(true);
if (!isset($_SESSION['student'])) {
  header("location: Faculty Login.php");
}
?>
<html>

<head>
    <title>Faculty Information Management System</title>

<body style='background-color: #ADD8E6'>
    </head>

    <body>
        <center>
            <?php include("header.php"); ?>
            <div class="header">
                <h1>Confirm User Name</h1>
                <form action="" method="POST">
                    <input type="text" name="username" placeholder="ENTER USER NAME" /><br />
                    <input type="submit" name="search" value="Confirm " />

                </form>
            </div>

            <?php
            include("includes/connection.php");
            if (isset($_POST['search'])) {
                $username = $_POST['username'];
                if ($username == $_SESSION['student']) {
                    $query_run = mysqli_query($connect, "SELECT * FROM student_information where id='$username' ");

                    while ($row = mysqli_fetch_array($query_run)) {
            ?>
                        <h2>Update User info</h2>
                        <form action="" method="POST">
                            <label for="name"><b>Name</b></label><br>
                            <input type="text" name="name" value="<?php echo $row['name'] ?>" /><br>

                            <label for="phone"><b>Interest</b></label><br>
                            <input type="text" name="interest" value="<?php echo $row['interest'] ?>" /><br>

                            <input type="submit" name="update" value="Update Data">
                        </form>

            <?php
                    }
                }
            }
            ?>
        </center>
    </body>

</html>
<?php

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $interest = $_POST['interest'];

    $query = "UPDATE student_information SET interest='$interest' WHERE name='$name' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated") </script>';
    } else {
        echo '<script> alert("DATA NOT Updated!!") </script>';
    }
    header("location: infoMyStudentInfo.php");
}
?>