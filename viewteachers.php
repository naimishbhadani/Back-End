<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    </head>
 
 
<body>
 
 
<?php
 
$link = mysqli_connect("localhost", "root", "", "alphonsusschool");
 
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>
 
<h3>See all teachers</h3>
   
        <table>
       
            <tr>
                <th width="150px"><br>TeacherID<hr></th>
                <th width="150px"><br>FirstName<hr></th>
                <th width="250px"><br>ClassID<hr></th>
                <th width="250px"><br>Subject<hr></th>
                <th width="250px"><br>Wages<hr></th>
            </tr>
               
<?php
$sql = mysqli_query($link, "SELECT TeacherID,FirstName,ClassID,Subject,Wages FROM teachers");
   
 
while ($row = $sql->fetch_assoc()){
    echo "
    <tr>
     
    <th>{$row['TeacherID']}</th>
    <th>{$row['FirstName']}</th>
    <th>{$row['ClassID']}</th>
    <th>{$row['Subject']}</th>
    <th>{$row['Wages']}</th>
     
 
 
 
 
 
            </tr>";
            }
            ?>
            </table>
        </body>
</html>