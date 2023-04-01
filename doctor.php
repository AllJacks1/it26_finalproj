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
<<<<<<< HEAD
<<<<<<<< HEAD:doctor.php
    <link rel="stylesheet" href="doctor.css?v=<?php echo time(); ?>">
========
    <link rel="stylesheet" href="patient.css">
>>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542:patient.html
=======
    <link rel="stylesheet" href="doctor.css">
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
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
<<<<<<< HEAD
<<<<<<<< HEAD:doctor.php
            <a href="adminMain.php">
========
            <a href="adminMain.html">
>>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542:patient.html
=======
            <a href="adminMain.php">
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
              <span class="icon">
                <i class="fa-solid fa-house"></i>
              </span>
              <span class="title">Dashboard</span>
            </a>
          </li>

          <li>
<<<<<<< HEAD
<<<<<<<< HEAD:doctor.php
            <a href="patient.php">
========
            <a href="patient.html">
>>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542:patient.html
=======
            <a href="patient.html">
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
              <span class="icon">
                <i class="fa-solid fa-hospital-user"></i>
              </span>
              <span class="title">Patient</span>
            </a>
          </li>

          <li>
<<<<<<< HEAD
<<<<<<<< HEAD:doctor.php
            <a href="doctor.php">
========
            <a href="doctor.html">
>>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542:patient.html
=======
            <a href="doctor.php">
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
              <span class="icon">
                <i class="fa-solid fa-user-doctor"></i>
              </span>
              <span class="title">Doctor</span>
            </a>
          </li>

          <li>
<<<<<<< HEAD
<<<<<<<< HEAD:doctor.php
          <a href="medicine.php">
            <span class="icon">
              <i class="fa-solid fa-tablets"></i>
            </span>
            <span class="title">Medicine</span>
          </a>
        </li>

          <li>
            <a href="addRecords.php">
========
            <a href="addRecords.html">
>>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542:patient.html
=======
            <a href="addRecords.html">
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
              <span class="icon">
                <i class="fa-solid fa-user-plus"></i>
              </span>
              <span class="title">Add records</span>
            </a>
          </li>

          <li>
<<<<<<< HEAD
<<<<<<<< HEAD:doctor.php
            <a href="manageRecords.php">
========
            <a href="#">
>>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542:patient.html
=======
            <a href="#">
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
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
<<<<<<< HEAD
<<<<<<<< HEAD:doctor.php
                    <input type="text" placeholder="Search Doctor">
========
                    <input type="text" placeholder="Search Patient ID">
>>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542:patient.html
=======
                    <input type="text" placeholder="Search Patient ID">
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
            </div>
        </div>

        <div class="details">
<<<<<<< HEAD
<<<<<<<< HEAD:doctor.php
=======
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
            <div class="doctor">
                <div class="cardHeader">
                    <h2>Doctor's Information</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <th>Doctor ID</th>
                    <th>Fullname</th>
                    <th>Gender</th>
                    <th>Specialization</th>
                  </thead>
                  <tbody>
                  <?php
                    include("database.php");
                    include("functions.php");
                    
                    $query=mysqli_query($con,"select * from `doctor`");
                    while($row=mysqli_fetch_array($query)){
                      ?>
                      <tr>
                        <td><?php echo ucwords($row['doctorID']); ?></td>
                        <td><?php echo ucwords($row['fullname']); ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo ucwords($row['specialization']); ?></td>
                      </tr>
                      <?php
                    }
                  ?>
                  </tbody>
<<<<<<< HEAD
========
            <div class="patient">
                <div class="cardHeader">
                    <h2>Patient's Information   </h2>
                    <a href="#" class="btn">View All</a>
                </div>
            
    
                <table>
                    <thead>
                        <tr>
                            <td>PatientID</td>
                            <td>Last name</td>
                            <td>First Name</td>
                            <td>Middle Name</td>
                            <td>Gender</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>PatientID</td>
                            <td>Last name</td>
                            <td>First Name</td>
                            <td>Middle Name</td>
                            <td>Gender</td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>PatientID</td>
                            <td>Last name</td>
                            <td>First Name</td>
                            <td>Middle Name</td>
                            <td>Gender</td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>PatientID</td>
                            <td>Last name</td>
                            <td>First Name</td>
                            <td>Middle Name</td>
                            <td>Gender</td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>PatientID</td>
                            <td>Last name</td>
                            <td>First Name</td>
                            <td>Middle Name</td>
                            <td>Gender</td>
                        </tr>
                    </tbody>
>>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542:patient.html
=======
>>>>>>> fb6055acfbc7600afbef5429eb858dc68a573542
                </table>
            </div>
      </div>

      

      
    </div>

    <script src="adminMain.js"></script>
  </body>
</html>
