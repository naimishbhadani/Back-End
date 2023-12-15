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
//if (isset($_POST['submit'])) {
    $TeacherID = $_POST['TeacherID'];
    $FirstName = $_POST['FirstName'];
    $ClassID = $_POST['ClassID'];
    $Subject = $_POST['Subject'];
    $Wages = $_POST['Wages'];
     
/*
Step 3  executes the Insert query on the database
*/
$sql = "UPDATE teachers SET TeacherID= '$TeacherID', FirstName= '$FirstName', ClassID= '$ClassID', Subject= '$Subject', Wages= '$Wages',  WHERE ParentID= '$ParentID'";
    if (mysqli_query($link, $sql)) {
      echo "Update successfully";
    } else {
      echo "Error adding record ";
    }
 
//}
 
?>