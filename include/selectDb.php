<?php

include 'dbConnection.php';

//for announcement
$getPost = "SELECT * FROM announcements ORDER BY uploadId DESC ";
$resultGetPost = mysqli_query($conn, $getPost);


//end of announcement