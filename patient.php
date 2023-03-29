<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="patient.css">
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="logo">
                <img src="logo.ico" alt="" />
              </span>
              <span class="logo-name">St. Kerby Hospital</span>
            </a>
          </li>
          <li id="dashboard">
            <a href="adminMain.php">
              <span class="icon">
                <i class="fa-solid fa-house"></i>
              </span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="patient.html">
              <span class="icon">
                <i class="fa-solid fa-hospital-user"></i>
              </span>
              <span class="title">Patient</span>
            </a>
          </li>
          <li>
            <a href="doctor.php">
              <span class="icon">
                <i class="fa-solid fa-user-doctor"></i>
              </span>
              <span class="title">Doctor</span>
            </a>
          </li>
          <li>
            <a href="addRecords.php">
              <span class="icon">
                <i class="fa-solid fa-user-plus"></i>
              </span>
              <span class="title">Add records</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <i class="fa-solid fa-pen-to-square"></i>
              </span>
              <span class="title">Manage records</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main">
        <div class="topbar">
            <div class="toggle">
              <i class="fa-solid fa-bars"></i>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search Patient ID">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
            </div>
        </div>
        <div class="details">
            <div class="patient">
                <div class="cardHeader">
                    <h2>Patient's Information   </h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <th>Patient ID</th>
                    <th>Fullname</th>
                    <th>Age</th>
                    <th>Gender</th>
                  </thead>
                  <tbody>
                  <?php
                    include("database.php");
                    include("functions.php");
                    
                    $query=mysqli_query($con,"SELECT patientID, CONCAT(fn, ' ',  mi, '. ', ln) AS 'fullname', age, gender FROM `patient` WHERE 1");
                    while($row=mysqli_fetch_array($query)){
                      ?>
                      <tr>
                        <td><?php echo ucwords($row['patientID']); ?></td>
                        <td><?php echo ucwords($row['fullname']); ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo ucwords($row['gender']); ?></td>
                      </tr>
                      <?php
                    }
                  ?>
                  </tbody>
                </table>
            </div>
      </div>
    </div>
    <script src="adminMain.js"></script>
  </body>
</html>
