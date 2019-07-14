<?php
$con=mysql_connect("localhost","root","")or die("cannot connect mysql ".mysql_error());
mysql_select_db("hostel management",$con);
$usn=$_POST['usn'];
$room_no=$_POST['room_no'];
$sql1="UPDATE alloted_rooms set room_no='$room_no' WHERE usn='$usn'";
mysql_query($sql1,$con) or die("not exicuted".mysql_error());

mysql_close($con);
echo "<script> alert(\"successfully updated \"); 
						document.location=\"staff.html\";
							</script>";
							mysql_close($con);
?>