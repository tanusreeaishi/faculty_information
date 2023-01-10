<?php
session_start();
session_regenerate_id(true);

?>
<?php include("header.php"); ?>

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
    <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Supervisor Information (Based on Your Interest)</h3>
    <table class="center">
      <tr>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Name</h3>
        </th>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Initial</h3>
        </th>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Designation</h3>
        </th>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Scholar ID</h3>
        </th>
        <th>
          <h2 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Research Interest</h3>
        </th>
      </tr>
      <?php
      $uname = $_SESSION['student'];
      $query_run = mysqli_query($connect, "select * from faculty_information where research = (select interest from student_information where id='$uname')");

      while ($data = mysqli_fetch_array($query_run)) {
      ?>
        <tr>
          <?php
          
          ?>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $data['name'] . "</b>" ?></h3>
          </th>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $data['initial'] . "</b>" ?></h3>
          </th>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $data['des'] . "</b>" ?></h3>
          </th>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $data['scholar'] . "</b>" ?></h3>
          </th>
          <th>
            <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><?php echo "<b>" . $data['research'] . "</b>" ?></h3>
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
        <h2>Confirm Your Userame</h2>
        <form action="" method="POST">
          <input type="text" name="fname" placeholder="ENTER Student Username" /><br />
          <input type="submit" name="search" value="Search Data" />

        </form>
      </div>
      <?php
      if (isset($_POST['search'])) {
        $fuser = $_POST['fname'];

        $query_run = mysqli_query($connect, "select * from student_information where id='$fuser' ");

        while ($row = mysqli_fetch_array($query_run)) {
      ?>
          <h2>Update User info</h2>
          <form action="" method="POST">
            <label for="Student Name"><b>Student Name</b></label><br>
            <input type="text" name="student_name" value="<?php echo $row['name'] ?>" /><br>
            <label for="Supervisor"><b>Supervisor Name</b></label><br>
            <input type="text" name="supervisor" value="<?php echo $row['supervisor'] ?>" /><br>

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
    
    

    $query = "UPDATE student_information SET supervisor='$supervisor', thesis_status='' WHERE name='$name' ";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
      echo '<script> alert("Data Updated") </script>';
    } else {
      echo '<script> alert("DATA NOT Updated!!") </script>';
    }
  }
  ?>

  </html>