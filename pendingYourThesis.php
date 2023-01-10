<?php
session_start();
session_regenerate_id(true);
if (!isset($_SESSION['FacultyLoginId'])) {
  header("location: Faculty Login.php");
}
?>
<?php include("header1.php"); ?>

<style>
  table,
  th,
  td {
    border: 1px solid black;
  }

  .center {
    margin-left: auto;
    margin-right: auto;
  }
</style>

<!DOCTYPE html>
</nav>

<body>


  <body style='background-color: #ADD8E6'>
    <nav class="navbar navbar-expand-sm bg-info navbar-dark">

      <div class="mr-auto"></div>

      <ul class="navbar-nav">

        <?php

        include("includes/connection.php");
        ?>
      </ul>
    </nav>
    <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">My Thesis Pending Student Information</h3>
    <table class="center">
      <tr>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Name</h3>
        </th>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Supervisor</h3>
        </th>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Interest</h3>
        </th>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Thesis Status</h3>
        </th>
      </tr>
      <?php
      $uname = $_SESSION['FacultyLoginId'];
      $query_run = mysqli_query($connect, "select * from student_information where 
      (thesis_status='' or thesis_status is NULL or thesis_status like '%no%') 
      and supervisor = (select name from faculty_information where id = '$uname')");

      while ($data = mysqli_fetch_array($query_run)) {
      ?>
        <tr>
          <?php
          $t = strtolower($data['thesis_status']);
          $s = $data['supervisor'];

          if ($t == "" || $t == Null || $t == 'no') {
            $t = "Not Confirmed Yet";
          } else {
            $t = "Confirmed";
          }
          if ($s == "" || $s == Null) {
            $s = "Not Selected Yet";
          }
          ?>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $data['name'] . "</b>" ?></h3>
          </th>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $s . "</b>" ?></h3>
          </th>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $data['interest'] . "</b>" ?></h3>
          </th>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $t . "</b>" ?></h3>
          </th>
          <?php
          ?>
        </tr>
      <?php
      }
      ?>
    </table>
  </body>

  <body>
    <center>
      </br>

      <div class="header">
        <h2>Search Student Name</h2>
        <form action="" method="POST">
          <input type="text" name="fname" placeholder="ENTER Student Name" /><br />
          <input type="submit" name="search" value="Search Data" />

        </form>
      </div>
      <?php
      if (isset($_POST['search'])) {
        $fuser = $_POST['fname'];

        $query_run = mysqli_query($connect, "select * from student_information where name='$fuser' ");

        while ($row = mysqli_fetch_array($query_run)) {
      ?>
          <h2>Update User info</h2>
          <form action="" method="POST">
            <label for="Student Name"><b>Student Name</b></label><br>
            <input type="text" name="student_name" value="<?php echo $row['name'] ?>" /><br>
            <label for="Supervisor"><b>Supervisor</b></label><br>
            <input type="text" name="supervisor" value="<?php echo $row['supervisor'] ?>" /><br>
            <label for="Status"><b>Status</b></label><br>
            <input type="text" name="thesis_status" value="<?php echo $row['thesis_status'] ?>" /><br>

            <input type="submit" name="update" value="Update Data">
          </form>

      <?php
        }
      }
      ?>
    </center>
  </body>

  </html>
  <?php

  if (isset($_POST['update'])) {
    $name = $_POST['student_name'];
    $supervisor = $_POST['supervisor'];
    $status = $_POST['thesis_status'];

    $query = "UPDATE student_information SET supervisor='$supervisor', thesis_status='$status' WHERE name='$name' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
      header("location: pendingYourThesis.php");
      echo '<script> alert("Data Updated") </script>';
    } else {
      echo '<script> alert("DATA NOT Updated!!") </script>';
    }
  }
  ?>

  </html>