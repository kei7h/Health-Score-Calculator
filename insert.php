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