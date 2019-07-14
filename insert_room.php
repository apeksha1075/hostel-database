<?php 
$con=mysql_connect("localhost","root","") or die(mysql_error($con));

$db=mysql_select_db("hostel management") or die(mysql_error($con));
$room_no=$_POST['room_no'];

if(isset($_POST['1']))
{
	$usn1=$_POST['1'];
	$sql1="SELECT * from student_details WHERE usn='$usn1'";
	$result1=mysql_query($sql1,$con);
    if(mysql_num_rows($result1)==0)
    {
	    echo "<script> alert(\"student not registered  \"); 
						document.location=\"index.html\";
							</script>";
							mysql_close($con);

    }
    $sql2="SELECT * from alloted_rooms WHERE usn='$usn1'";
	$result2=mysql_query($sql2,$con);
    if(mysql_num_rows($result2)!=0)
    {
	    echo "<script> alert(\"already room alloted  \"); 
						document.location=\"allotment_letter.html\";
							</script>";
							mysql_close($con);

    }
	mysql_query("INSERT INTO alloted_rooms VALUES ('$usn1', '$room_no');") or die(mysql_error());
}
if(isset($_POST['2']))
{
	$usn2=$_POST['2'];
	$sql1="SELECT * from student_details WHERE usn='$usn2'";
	$result1=mysql_query($sql1,$con);
    if(mysql_num_rows($result1)==0)
    {
	    echo "<script> alert(\"student not registered  \"); 
						document.location=\"index.html\";
							</script>";
							mysql_close($con);

    }
    $sql2="SELECT * from alloted_rooms WHERE usn='$usn2'";
	$result2=mysql_query($sql2,$con);
    if(mysql_num_rows($result2)!=0)
    {
	    echo "<script> alert(\"already room alloted  \"); 
						document.location=\"allotment_letter.html\";
							</script>";
							mysql_close($con);

    }
	mysql_query("INSERT INTO alloted_rooms VALUES ('$usn2', '$room_no');") or die(mysql_error());
}
if(isset($_POST['3']))
{
	$usn3=$_POST['3'];
	$sql1="SELECT * from student_details WHERE usn='$usn3'";
	$result1=mysql_query($sql1,$con);
    if(mysql_num_rows($result1)==0)
    {
	    echo "<script> alert(\"student not registered  \"); 
						document.location=\"index.html\";
							</script>";
							mysql_close($con);

    }
    $sql2="SELECT * from alloted_rooms WHERE usn='$usn3'";
	$result2=mysql_query($sql2,$con);
    if(mysql_num_rows($result2)!=0)
    {
	    echo "<script> alert(\"already room alloted  \"); 
						document.location=\"allotment_letter.html\";
							</script>";
							mysql_close($con);

    }
	mysql_query("INSERT INTO alloted_rooms VALUES ('$usn3', '$room_no');") or die(mysql_error());
}

echo "<br>";
mysql_query("UPDATE room_details SET status = 1 WHERE room_no ='$room_no';") or die(mysql_error());

	echo "<script> alert(\"UPDATE SUCCESSFULL\"); 
						document.location=\"allotment_letter.html\";
							</script>";
?>


