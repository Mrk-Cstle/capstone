<?php
include 'include/session.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>

<body>
    <?php
    include 'include/nav.php';

    ?>
    <h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
</body>

</html>