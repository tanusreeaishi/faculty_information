<?php
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['FacultyLoginId'])){
        header("location: Faculty Login.php");
    }
?>
<?php include("header1.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Faculty DASHBOARD</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Panel</title>
    <body style='background-color: #ADD8E6'>
    <style>
            body{
                margin: 0;
            }
            div.header{
                color: #f0f0f0;
                font-family: poppins;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                padding: 0 60px;
            }
            div.header button{
                background-color: #f0f0f0;
                font-size: 16px;
                font-weight: 550;
                padding: 8px 12px;
                border: 2px solid #21618c;
                border-radius: 5px;
            }
        </style>

       
        
    </div>
</head>
</nav>
<body>
<body>

    <div class="container">
        <h2 style="text-align:center;padding-top:55px;color: black;font-size:35px;">Faculty Dashboard</h2>
        <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><a href="infoFaculty.php">My Information</a></h3>
        <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><a href="allFacultyInfo.php">All Faculty Information</a></h3>
        <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><a href="allStudentInfo.php">All Student Information</a></h3>
        <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><a href="currentThesis.php">Current Thesis Students Information</a></h3>
        <h3 style="text-align:center;padding-left:35px;padding-top:35px;color: black#A9A9A9;font-size:25px;"><a href="pendingThesis.php">Pending Thesis Requests</a></h3>
        

    </div>
    </body>
</body>
</html>