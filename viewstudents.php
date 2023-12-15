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
 
<h3>See all students</h3>
   
        <table>
       
            <tr>
                <th width="150px"><br>StudentID<hr></th>
                <th width="250px"><br>StudentFirstNmae<hr></th>
                <th width="250px"><br>StudentLastName<hr></th>
                <th width="250px"><br>DateofBirth<hr></th>
                <th width="250px"><br>EmailID<hr></th>
                <th width="250px"><br>ClassID<hr></th>
            </tr>
               
            <?php
             $sql = mysqli_query($link, "SELECT StudentID,StudentFirstName,StudentLastName,DateOfBirth,EmailID,ClassID FROM students");
   
 
            while ($row = $sql->fetch_assoc()){
            echo "
            <tr>
     
                <th>{$row['StudentID']}</th>
                <th>{$row['StudentFirstName']}</th>
        <th>{$row['StudentLastName']}</th>
        <th>{$row['DateOfBirth']}</th>
        <th>{$row['EmailID']}</th>
        <th>{$row['ClassID']}</th>
 
 
 
 
 
 
            </tr>";
            }
            ?>
            </table>
        </body>
        </html>
 