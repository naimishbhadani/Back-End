<?php

//Step 1 check the connection ....

$link = mysqli_connect("localhost", "root", " ", "alphonsusschool");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
Step 2 create the PHP variables for the html form  ....
*/
if (isset($_POST['submit'])) {
    $StudentID = $_POST['ParentID'];
    $StudentID = $_POST['ChildName'];
    $StudentFirstName = $_POST['ParentName'];
    $DateOfBirth = $_POST['ParentsAddress'];
    $StudentLastName = $_POST['ParentsPhoneNumber'];
    $EmailID = $_POST['ParentsAge'];
/*
Step 3  executes the Insert query on the database
*/
    $sql = "INSERT INTO parents(ParentID,ChildName,ParentName,ParentsAddress,ParentsPhoneNumber,ParentsAge) VALUES ('$ParentID','$Childname','$ParentName','$ParentsAddress','$ParentsPhoneNumber','$ParentsAge')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>