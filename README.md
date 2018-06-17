# Health-Score-Calculator
Health Score Calculator for anyone, any company or organisation who want to know or keep track of the health status of their employees. The idea is to get all the important individual information that is directly and indirectly correlated with health, then apply an algorithm to the information which will help to predict or score the individual. This is usually done by the doctors manually, by looking at all the individuals vitals, x-rays, ecgs, blood tests and so forth. So the idea is to automate this process. The individual has to go through all the tests then input all his important information into the database. The algorithm will then be applied to the individual data in order to give a Health Score.

# This project is in the early stages, so this is just the input page that is connected to the database. 

## Tools used;
1. Dell Inspiron 7572 with specifications of i7-8550U CPU, 16.0GB RAM, 64-bit Windows 10 OS. 
2. PHPADMIN
3. MYSQL DATABASE
4. BOOTSTRAP
5. NOTEBOOK++ TEXT EDITOR
6. WAMPSERVER32

![](Screenshot%20(127).png)
![](Screenshot%20(128).png)
## Index.php
```
<!DOCTYPE html>

<html>

<title>W3.CSS Template</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<body>

<!-- Header -->

<header class="w3-container w3-theme w3-padding" id="myHeader">

    <div class="w3-center">

  <h4>HSC SYSTEM</h4>

  <h1 class="w3-xxxlarge w3-animate-bottom">HEALTH SCORE CALCULATOR</h1>

    <div class="w3-padding-32">

      

    </div>

  </div>

</header>



<p class="w3-opacity w3-center"><i>PLEASE ENTER YOUR INFORMATION HERE SO WE CAN CALCULATE YOUR HEALTH SCORE:)</i></p>





<html>

<body>



<form action="insert.php" method="post">

ID: <input type="int" name="id" /><br><br>

Name: <input type="varchar" name="name" /><br><br>

Date of Birth: <input type="varchar" name="dateofbirth" /><br><br> 

Sex: <input type ="varchar" name="sex" /><br><br>

Body Temperature: <input type="varchar" name="bodytemperature" /><br><br>

Blood Type: <input type="varchar" name="bloodtype" /><br><br>

Height: <input type="varchar" name="height" /><br><br>

BMI Index: <input type="varchar" name="bmiindex" /><br><br>

Urine test: <input type="varchar" name="urinetest" /><br><br>

Electrocardiography: <input type="varchar" name="ecg" /><br><br>

Chest X-ray: <input type="varchar" name="chestxray" /><br><br>

Recommended Treatment: <input type="varchar" name="treatment" /><br><br>

Patient's History: <input type="varchar" name="history" /><br><br>

Weight: <input type="varchar" name="weight" /><br><br>

Doctor's Comment: <input type="varchar" name="comment" /><br><br>

HIV Status: <input type="varchar" name="status" /><br><br>

Diet: <input type="varchar" name="diet" /><br><br>

Allergies: <input type="varchar" name="allergies" /><br><br>

Profession: <input type="varchar" name="profession" /><br><br>

<p class="w3-opacity w3-center"><i>IF YOU DECLARE THAT ALL INFORMATION PROVIDED IS TRUE THEN PRESS SUBMIT QUERY</i></p>

<input type="submit" />

<!-- The Contact Section -->

  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">

    <h2 class="w3-wide w3-center">OUR CONTACT INFO</h2>

    <div class="w3-row w3-padding-32">

      <div class="w3-col m6 w3-large w3-margin-bottom">

        <i class="fa fa-map-marker" style="width:30px"></i> Tianjin, China<br>

        <i class="fa fa-phone" style="width:30px"></i> Phone: +86 183-22700417<br>

        <i class="fa fa-envelope" style="width:30px"> </i> Email: nyashakeith@outlook.com<br>

      </div>

      

    </div>

  </div>

  

</form>

</body>

</html>
```

## Insert.php

```
<html>

<body>

<?php

 

// Create connection

$conn = new mysqli('localhost','root','');

 

// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} 

echo "DB Connected successfully";

 

// this will select the Database ahc_db

mysqli_select_db($conn,"ahc_db");

 

echo "\n DB is seleted as Test  successfully";

 

// create INSERT query

 

 

$sql="INSERT INTO ahc1_table(id,name,dateofbirth,sex,bodytemperature,bloodtype,height,bmiindex,urinetest,ecg,chestxray,treatment,history,weight,comment,status,diet,allergies,profession)

VALUES ('$_POST[id]','$_POST[name]','$_POST[dateofbirth]','$_POST[sex]','$_POST[bodytemperature]','$_POST[bloodtype]','$_POST[height]','$_POST[bmiindex]','$_POST[urinetest]','$_POST[ecg]','$_POST[chestxray]','$_POST[treatment]','$_POST[history]','$_POST[weight]','$_POST[comment]','$_POST[status]','$_POST[diet]','$_POST[allergies]','$_POST[profession]')";



 

if ($conn->query($sql) === TRUE) {

    echo "New record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

 

mysqli_close($conn);

?>

</body>

</html>
```
