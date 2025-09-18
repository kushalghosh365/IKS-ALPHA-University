<?php
session_start();
include("connect.php");

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #004080;
            color: white;
            padding: 5px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #c7fefd;
        }
        .profile-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .profile-info {
            flex: 2;
        }
        .profile-info p {
            margin: 10px 0;
            font-size: 16px;
        }
        .profile-photo, .signature {
            flex: 1;
            text-align: center;
        }
        .profile-photo img, .signature img {
            width: 150px;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .note {
            font-size: 12px;
            color: #888;
            text-align: center;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 15px;
            color: #555;
        }
    </style>
</head>
<body>




    <div class="header">
    <h2 class="logo"><img src="images/ikslogo.png" alt="IKS logo" id="ikslogo" style="height: 60px; width: 60px;"/>IKS ALPHA University</h2>
        <p style="display: inline;">Durgapur-12, West Bengal</p>
        <div style="padding-left: 85%;">   <button style="background-color: red; height: 25px;"><a href="logout.php" style="font-size:larger; color:white;">Logout</a></button>     </div>
    </div>
    <div class="container">
        <div class="profile-section">
            <div class="profile-info">




        <p style="color: blue;">
       Welcome  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <br>
       <br>




                <p><strong>Name:</strong>
        <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
      </p>
      







                <p><strong>Roll No:</strong> 00<?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['Id'];
        }
       }
       ?></p>








                <p><strong>Guardian's Name:</strong> <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['fatherName'];
        }
       }
       ?></p>





                <p><strong>Email ID:</strong> <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['email'];
        }
       }
       ?></p>






                <p><strong>College:</strong> 011 IKS ALPHA University</p>





                <p><strong>Mobile No:</strong> <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['phoneNumber'];
        }
       }
       ?></p>
            </div>
            <div class="profile-photo">
                <img src="images/profile-logo.png" alt="Profile Photo">
                <p class="note">(Passport size photo 4.5 cm x 3.5 cm)</p>
            </div>
        </div>
        <br>
        <br>
    </div>
    <div class="footer">
        <p>© 2024 IKS ALPHA University</p>
    </div>
</body>
</html>
