<?php 
$con=mysql_connect("localhost","root","") or die(mysql_error($con));

$db=mysql_select_db("hostel management") or die(mysql_error($con));
$room_no=$_POST['s1'];

$res=mysql_query("select * from room_details where room_no='$room_no' ") or die(mysql_error());
?>
<form action="insert_room.php" method="post">
<?php
  $row=mysql_fetch_array($res);
  $temp_usn=0;
  	while($temp_usn<$row[1])
  	{
  		$temp_usn=$temp_usn+1;
  		echo " USN-".$temp_usn."<input type='text' name='$temp_usn' required ><BR>";
  		
  	}

 
 echo "<input type='checkbox' name='room_no' value='$room_no' required >Conform"."<h style='color:red';>".strtoupper($row[2])."</h>";
echo " HOSTEL ROOM NO-"."<h style='color:red'>".$room_no."</h>";


 ?><br>
 <input type="submit" name="submit" value="SAVE" type="check" style="width: 179px;background-color: lightseagreen;
	 height: 35px;font-size: 30px;font-weight: 700;">
</form>
