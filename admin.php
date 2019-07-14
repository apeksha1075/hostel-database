<?php
$con=mysql_connect("localhost","root","")or die("cannot connect mysql ".mysql_error());
mysql_select_db("hostel management",$con);
$username=$_POST['username'];
$password=$_POST['password'];
$conpass=$_POST['conpass'];
$type="admin";
if($password!=$conpass)
{

echo "registered successfully";
echo "<script> alert(\"enter correct password \"); 
						document.location=\"admin_login.html\";
							</script>";
							mysql_close($con);
}
$sql3="INSERT INTO login_details(username,password,user_type) VALUES('$_POST[username]','$_POST[password]','$type')";
mysql_query($sql3,$con) or die("not exicuted".mysql_error());
mysql_close($con);
echo "registered successfully";
echo "<script> alert(\"registerd successfully... Please login \"); 
						document.location=\"login.html\";
							</script>";
							mysql_close($con);
?>