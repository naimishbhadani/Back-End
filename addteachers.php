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
    $StudentID = $_POST['TeacherID'];
    $StudentFirstName = $_POST['ClassID'];
    $StudentLastName = $_POST['FirstName'];
    $DateOfBirth = $_POST['Subject'];
    $EmailID = $_POST['Wages'];
    $ClassID = $_POST['Wages'];
/*
Step 3  executes the Insert query on the database
*/
    $sql = "INSERT INTO teachers(TeacherID,ClassID,FirstName,Subject,Wages) VALUES ('$TeacherID','$ClassID','FirsttName','$Subject','$Wages')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>