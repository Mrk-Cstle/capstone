<?php

include 'dbConnection.php';

//for announcement
$getPost = "SELECT * FROM announcements ORDER BY uploadId DESC ";
$resultGetPost = mysqli_query($conn, $getPost);

//end of announcement

//for Staf List
$getStaff = "SELECT * FROM staff";
$resultGetStaff = mysqli_query($conn, $getStaff);
//end of Staff List