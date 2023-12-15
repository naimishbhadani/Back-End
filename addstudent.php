<?php

//Step 1 check the connection ....

$link = mysqli_connect("localhost", "root", "", "alphonsusschool");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
Step 2 create the PHP variables for the html form  ....
*/
if (isset($_POST['submit'])) {
    $StudentID = $_POST['StudentID'];
    $StudentFirstName = $_POST['StudentFirstName'];
    $StudentLastName = $_POST['StudentLastName'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $EmailID = $_POST['EmailID'];
    $ClassID = $_POST['ClassID'];
/*
Step 3  executes the Insert query on the database
*/
    $sql = "INSERT INTO students(StudentID,StudentFirstName,StudentLastName,DateOfBirth,EmailID,ClassID) VALUES ('$StudentID','$StudentFirstName','$StudentLastName','$DateOfBirth','$EmailID','$ClassID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>