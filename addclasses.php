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
    $StudentID = $_POST['ClassID'];
    $StudentFirstName = $_POST['ClassName'];
    $StudentLastName = $_POST['ClassNumber'];
    $DateOfBirth = $_POST['ClassCapacity'];
    $EmailID = $_POST['ClassTeacher'];
/*
Step 3  executes the Insert query on the database
*/
    $sql = "INSERT INTO classes(ClassID,ClassName,ClassNumber,ClassCapacity,ClassTeacher) VALUES ('$ClassID','$ClassName','$ClassNumber','$ClassCapacity','$ClassTeacher')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>