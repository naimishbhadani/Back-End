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
    $ParentID = $_POST['ParentID'];
    $ChildNameID = $_POST['ChildName'];
    $ParentName = $_POST['ParentName'];
    $ParentsAddress = $_POST['ParentsAddress'];
    $ParentsPhoneNumber = $_POST['ParentsPhoneNumber'];
    $ParentsAge = $_POST['ParentsAge'];
/*
Step 3  executes the Insert query on the database
*/
$sql = "UPDATE parents SET ParentID= '$ParentID', ChildName= '$ChildName', ParentName= '$ParentName', ParentsAddress= '$ParentsAddress', ParentsPhoneNumber= '$ParentsPhoneNumber', ParentsAge= '$ParentsAge, ' WHERE ParentID= '$ParentID'";
    if (mysqli_query($link, $sql)) {
      echo "Update successfully";
    } else {
      echo "Error adding record ";
    }
 
//}
 
?>