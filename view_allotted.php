<html>

<head>

<h1> Rooms Allotted </h1>


<style>

table

{

border-style:solid;

border-width:2px;

border-color:black;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

$con = mysql_connect("localhost","root","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("hostel management", $con);



$sql="SELECT usn AS USN,room_no AS ROOM_NUMBER FROM  alloted_rooms";
$result=mysql_query($sql,$con);





 

echo "<table border='1'>

<tr>

<th>USN</th>

<th>ROOM_NUMBER</th>







</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['USN'] . "</td>";

echo "<td>" . $row['ROOM_NUMBER'] . "</td>";

  
    

 

  echo "</tr>";

  }

echo "</table>";

 

mysql_close($con);

?>

</body>

</html>

