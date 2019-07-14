<html>

<head>

<h1> Feedback Report </h1>


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



$sql="SELECT avg(room_hygiene) AS ROOM_HYGIENE,avg(furniture) AS FURNITURE,avg(corridor) AS CORRIDORS,avg(bathroom) AS BATHROOM,avg(recreation) AS RECREATION ,avg(hostel_surrounding) AS HOSTEL_SURROUNDING,avg(internet) AS INTERNET_FACILITY FROM feedback";
$result=mysql_query($sql,$con);





 

echo "<table border='1'>

<tr>

<th>ROOM_HYGIENE</th>

<th>FURNITURE</th>

<th>CORRIDORS</th>

<th>BATHROOM</th>

<th>RECREATION</th>

<th>HOSTEL_SURROUNDING</th>

<th>INTERNET_FACILITY</th>





</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['ROOM_HYGIENE'] . "</td>";

echo "<td>" . $row['FURNITURE'] . "</td>";
echo "<td>" . $row['CORRIDORS'] . "</td>";
echo "<td>" . $row['BATHROOM'] . "</td>";
echo "<td>" . $row['RECREATION'] . "</td>";
echo "<td>" . $row['HOSTEL_SURROUNDING'] . "</td>";
echo "<td>" . $row['INTERNET_FACILITY'] . "</td>";

  
    

 

  echo "</tr>";

  }

echo "</table>";

 

mysql_close($con);

?>

</body>

</html>

