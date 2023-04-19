<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
</head>

<body>
    * {
    box-sizing: border-box;
    margin: auto;
    }

    /* Navigation */
    #header {
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: rgb(80, 177, 50);
    box-shadow: 0px 10px 20px #000000;
    margin-bottom: 5px;
    }

    #pic {
    width: 40%;
    margin-left: 20px;
    }

    #pic img {
    height: 60px;
    width: auto;
    margin-top: 10px;
    margin-left: 20px;

    margin-bottom: 10px;
    }

    #menu {
    width: 60%;
    overflow: hidden;
    display: flex;
    flex-wrap: nowrap;
    padding-left: 250px;
    padding-right: 150px;
    }

    #menu a {
    text-decoration: none;
    color: black;
    font-size: 20px;
    padding: 20px 20px;
    text-align: center;
    width: 190px;
    height: 70px;
    }

    #menu a:hover {
    border-bottom: black solid 1px;
    font-weight: bolder;
    font-size: 18px;
    }

    .DropDownMenu {
    overflow: hidden;
    }

    .DropDownMenu .DropDownBtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    }

    .DropDownContent a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    }

    .DropDownContent a:hover {
    background-color: #ddd;
    }

    .DropDownMenu:hover .DropDownContent {
    display: block;
    }

    .DropDownContent {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    }

    .DropDownBtn {}

    /* End Of Navigation */
</body>

</html>