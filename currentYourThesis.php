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
    <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">My Thesis Student Information</h3>
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
      $query = "select * from student_information where supervisor = (select name from faculty_information where id = '$uname') and thesis_status != '' and thesis_status is not NULL and thesis_status not like '%no%'";
      $query_run = mysqli_query($connect, $query);
      while ($data = mysqli_fetch_array($query_run)) {
      ?>
        <tr>
          <?php
          $t = $data['thesis_status'];
          $s = $data['supervisor'];

          if ($t == "" || $t == Null) {
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
        </tr>
      <?php
      }
      ?>
    </table>
  </body>

  </html>