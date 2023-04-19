<?php

include 'include/dbConnection.php';


$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$gender = $_POST['gender'];
$civilStatus = $_POST['civilStatus'];
$registeredVoter = $_POST['registeredVoter'];
$birthDate = $_POST['birthDate'];
$birthPlace = $_POST['birthPlace'];
$citizenship = $_POST['citizenship'];
$addressNum = $_POST['addressNum'];
$addressStreet = $_POST['addressStreet'];
$addressBarangay = $_POST['addressBarangay'];
$contactNumber1 = $_POST['contactNumber1'];
$contactNumber2 = $_POST['contactNumber2'];
$picture = $_POST['2x2Pic'];
$signPic = $_POST['signPic'];
$schoolName = $_POST['schoolName'];
$schoolAddress = $_POST['schoolAddress'];
$schoolType = $_POST['schoolType'];
$course = $_POST['course'];
$currentLevel = $_POST['currentLevel'];
$fatherName = $_POST['fatherName'];
$father = $_POST['father'];
$fatherAddress = $_POST['fatherAddress'];
$fatherNumber = $_POST['fatherNumber'];
$fatherOccupation = $_POST['fatherOccupation'];
$fEducAttainment = $_POST['fEducAttainment'];
$motherName = $_POST['motherName'];
$mother = $_POST['mother'];
$motherAddress = $_POST['motherAddress'];
$motherNumber = $_POST['motherNumber'];
$motherOccupation = $_POST['motherOccupation'];
$mEducAttainment = $_POST['mEducAttainment'];
$guardianName = $_POST['guardianName'];
$guardianAddress = $_POST['guardianAddress'];
$guardianNumber = $_POST['guardianNumber'];
$guardianOccupation = $_POST['guardianOccupation'];
$gEducAttainment = $_POST['gEducAttainment'];
$sizeFamily = $_POST['sizeFamily'];
$familyIncome = $_POST['familyIncome'];

$fullName =  $lastName . ", " . $firstName . ' ' . $middleName;
$fullAddress = $addressNum . " " . $addressStreet . " " . $addressBarangay;

$query = "INSERT INTO registration (fullName, lastName, firstName,middleName,gender, civilStatus, voter, birthDate,birthPlace, citizenship, houseAddress, streetAddress, barangayAddress, contactNum1, contactNum2, 2x2Pic, signaturePic, schoolName, schoolAddress, schoolType, course, yearLevel, fatherName, fatherStatus,fatherAddress, fatherContact, fatherOccupation, fatherEduc, motherName, motherStatus, motherAddress, motherContact, motherOccupation, motherEduc, guardianName, guardianAddress, guardianContact, guardianOccupation, guardianEduc, sizeFamily, annualGross) VALUES ( '$fullName','$lastName' , '$firstName', '$middleName', '$gender', '$civilStatus', '$registeredVoter', '$birthDate','$birthPlace', '$citizenship', '$addressNum', '$addressStreet', '$addressBarangay', '$contactNumber1', '$contactNumber2', '$picture', '$signPic', '$schoolName', '$schoolAddress', '$schoolType', '$course', '$currentLevel', '$fatherName', '$father', '$fatherAddress', '$fatherNumber', '$fatherOccupation',  '$fEducAttainment', '$motherName', '$mother', '$motherAddress', '$motherNumber', '$motherOccupation', '$mEducAttainment', '$guardianName', '$guardianAddress', '$guardianNumber', '$guardianOccupation', '$gEducAttainment', '$sizeFamily', '$familyIncome')";

$insert = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        * {
            box-sizing: border-box;

        }

        body {
            border: 1px solid black;
        }

        header {
            display: flex;
            flex-direction: row;
            margin: 0px 50px;


        }

        #headerLogo {

            height: auto;
        }


        #headerLogo img {
            width: 50px;
            height: auto;
            margin-right: 5px;

        }

        #picture2x2 img {

            width: 150px;
            height: auto;



        }

        #headerLogo,
        #picture2x2 {

            width: auto;




        }

        #headerCenter {
            display: flex;
            text-align: center;
            width: 60%;
            justify-content: center;
        }

        #headerCenter p {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <p>CYSDO E-1 Form</p>
    <header>


        <div id="headerLogo">
            <img src="Images/San-Jose-del-Monte-Official-Seal.png" alt="San Jose Logo" />
            <img src="Images/CysdoLogo.png" alt="CYSDO LOGO" />
        </div>

        <div id="headerCenter">
            <p>Province of Bulacan<br />
                City of San Jose del Monte<br />
                Office of the City Mayor<br />
                CITY YOUTH AND SPORTS DEVELOPMENT OFFICE<br />
                <strong>
                    CITY EDUCATIONAL ASSISTANCE PROGRAM<br />
                    APPLICATION FORM </strong> <br />
            </p>
        </div>

        <div id="picture2x2">
            <img src="Images/1x1.jpg" alt="Picture 2x2" />
        </div>



    </header>
    <div id="instruction">
        <p>Instructions:</p>
        <p>Please read the General and Documentary Requirements. Fill the required information.
            Do not leave an item blank. If item is not applicable, indicate "N/A".
        </p>
        <p>CONTROL NUMBER: ______________</p>
    </div>

    <main>
        <table>
            <th>PERSONAL INFO</th>
            <tr>
                <td rowspan="2">Full Name</td>
                <td colspan="3"><?php echo "$fullName"; ?></td>
                <!-- <td></td>
                <td></td> -->
                <td><?php echo "$birthDate" ?></td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td>Last Name</td>
                <td>First Name</td>
                <td>Middle Name</td>
                <td>Birth date</td>
            </tr>
            <tr>
                <td rowspan="2">Complete Address:</td>
                <td colspan="3"><?php echo "$fullAddress" ?></td>
                <!-- <td></td>
                <td></td> -->
                <td><?php echo "$birthPlace" ?></td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td>House No.</td>
                <td>Block/Lot</td>
                <td>Street/Phase/Section</td>
                <td>Place of Birth</td>
            </tr>
            <tr>
                <td><?php echo "$gender" ?></td>
                <td><?php echo "$civilStatus" ?></td>
                <td><?php echo "$citizenship" ?></td>
                <td><?php echo "$contactNumber1" ?></td>
                <td><?php echo "$contactNumber2" ?></td>
                <td><?php echo "$registeredVoter" ?></td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td>Gender</td>
                <td>Civil Status</td>
                <td>Citizenship</td>
                <td>Contact Number 1</td>
                <td>Contact Number 2</td>
                <td>Registered Voter?</td>
            </tr>
        </table>
        <table>
            <th>EDUCATIONAL BACKGROUND</th>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>School Name</td>
                <td>School Address</td>
                <td>School Type</td>
            </tr>
            <tr>
                <td><?php echo "$schoolName" ?></td>
                <td><?php echo "$schoolAddress" ?></td>
                <td><?php echo "$schoolType" ?></td>
            </tr>
            <tr>
                <td>School Name</td>
                <td>School Address</td>
                <td>School Type</td>
            </tr>
            <tr>
                <td><?php echo "$course" ?></td>

                <td><?php echo "$currentLevel" ?></td>
            </tr>
            <tr>

                <td>Course/Strand</td>
                <td rowspan="2">Current Year Level</td>

            </tr>
        </table>
        <table>
            <th>FAMILY BACKGROUND</th>
            <tr>
                <td></td>
                <td>Father: <?php echo "$father" ?></td>
                <td>Mother: <?php echo "$mother" ?></td>
                <td>Guardian</td>
                <td>Name of siblings</td>

            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo "$fatherName" ?></td>
                <td><?php echo "$motherName" ?></td>
                <td><?php echo "$guardianName" ?></td>
                <td></td>

            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$fatherAddress" ?></td>
                <td><?php echo "$motherAddress" ?></td>
                <td><?php echo "$guardianAddress" ?></td>
                <td></td>
            </tr>
            <tr>
                <td>Contact No.</td>
                <td><?php echo "$fatherNumber" ?></td>
                <td><?php echo "$motherNumber" ?></td>
                <td><?php echo "$guardianNumber" ?></td>
                <td></td>

            </tr>
            <tr>
                <td>Occupation</td>
                <td><?php echo "$fatherOccupation" ?></td>
                <td><?php echo "$motherOccupation" ?></td>
                <td><?php echo "$guardianOccupation" ?></td>
                <td></td>

            </tr>
            <tr>
                <td>Educational Attainment</td>
                <td><?php echo "$fEducAttainment" ?></td>
                <td><?php echo "$mEducAttainment" ?></td>
                <td><?php echo "$gEducAttainment" ?></td>
                <td></td>

            </tr>
            <tr>
                <td colspan="3">Total Parents Annual Gross Income<?php echo "$familyIncome" ?></td>
                <td colspan="2">Size of Family<?php echo "$sizeFamily" ?></td>


            </tr>

        </table>
    </main>
</body>

</html>