<?php
session_start();
session_regenerate_id(true);
if (!isset($_SESSION['student'])) {
  header("location: Faculty Login.php");
}
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
    <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;">Supervisor Information</h3>
    <h4 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><a href="chooseYourThesis.php">Filter According to your Interest</a></h4>
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
      $query_run = mysqli_query($connect, "select * from faculty_information");

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

  

  </html>