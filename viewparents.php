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
 
<h3>See all parents</h3>
   
        <table>
       
            <tr>
                <th width="150px"><br>ParentID<hr></th>
                <th width="150px"><br>Childname<hr></th>
                <th width="250px"><br>ParentName<hr></th>
                <th width="250px"><br>ParentsAddress<hr></th>
                <th width="250px"><br>ParentsPhoneNumber<hr></th>
                <th width="250px"><br>ParentsAge<hr></th>
            </tr>
               
<?php
$sql = mysqli_query($link, "SELECT ParentID,ChildName,ParentName,ParentsAddress,ParentsPhoneNumber,ParentsAge FROM parents");
   
 
while ($row = $sql->fetch_assoc()){
    echo "
    <tr>
     
    <th>{$row['ParentID']}</th>
    <th>{$row['ChildName']}</th>
    <th>{$row['ParentName']}</th>
    <th>{$row['ParentsAddress']}</th>
    <th>{$row['ParentsPhoneNumber']}</th>
    <th>{$row['ParentsAge']}</th>
 
 
 
 
 
 
            </tr>";
            }
            ?>
            </table>
        </body>
</html>