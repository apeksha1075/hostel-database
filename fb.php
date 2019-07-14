<?php
$con=mysql_connect("localhost","root","")or die("cannot connect mysql ".mysql_error());
mysql_select_db("hostel management",$con);
$usn=$_POST['usn'];
$room_hygiene=$_POST['room_hygiene'];
$furniture=$_POST['furniture'];
$corridor=$_POST['corridor'];
$bathroom=$_POST['bathroom'];
$recreation=$_POST['recreation'];
$hostel_surrounding=$_POST['hostel_surrounding'];
$internet=$_POST['internet'];
$sql1="SELECT * from student_details where usn='$usn'";
$result1=mysql_query($sql1,$con);
if(mysql_num_rows($result1)==0)
{
	echo "<script> alert(\"Student not registered  \"); 
						document.location=\"login.html\";
							</script>";
							mysql_close($con);

}
$sql="INSERT INTO feedback (usn,room_hygiene,furniture,corridor,bathroom,recreation,hostel_surrounding,internet) VALUES ('$usn','$room_hygiene','$furniture','$corridor','$bathroom','$recreation','$hostel_surrounding','$internet')";
mysql_query($sql,$con) or die("not exicuted".mysql_error());
mysql_close($con);
echo "<script> alert(\"feedback taken successfully  \"); 
						document.location=\"index.html\";
							</script>";
							mysql_close($con);
?>
