<?php
$con=mysql_connect("localhost","root","")or die("cannot connect mysql ".mysql_error());
mysql_select_db("hostel management",$con);
$username=$_POST['username'];
$password=$_POST['password'];
$color=$_POST['color'];
$fname=$_POST['fname']; 
$lname=$_POST['lname']; 
$usn=$_POST['usn']; 
$branch=$_POST['branch'];
$sem=$_POST['sem'];
$bdate=$_POST['bdate'];
$father_name=$_POST['father_name'];
$mother_name= $_POST['mother_name'];  
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$parents_no=$_POST['parents_no'];
$blood_group=$_POST['blood_group'];
$sql="SELECT usn from student_details where usn='$usn'";
$result=mysql_query($sql,$con);
if(mysql_num_rows($result)!=0)
{
	echo "<script> alert(\"user exists please login \"); 
						document.location=\"login.html\";
							</script>";
							mysql_close($con);

}
$sql1="SELECT username from login_details WHERE username='$username'";
$result1=mysql_query($sql1,$con);
if(mysql_num_rows($result1)!=0)
{
	echo "<script> alert(\"username already exists  \"); 
						document.location=\"regs.html\";
							</script>";
							mysql_close($con);

}
$sql2="INSERT INTO student_details (fname,lname,usn,branch,sem,bdate,father_name,mother_name,gender,address,phone_no,parents_no,blood_group,color) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[usn]','$_POST[branch]','$_POST[sem]','$_POST[bdate]','$_POST[father_name]','$_POST[mother_name]','$_POST[gender]','$_POST[address]','$_POST[phone_no]','$_POST[parents_no]','$_POST[blood_group]','$color')";
mysql_query($sql2,$con) or die("not exicuted".mysql_error());

$type="student";
$sql3="INSERT INTO login_details(username,password,user_type) VALUES('$_POST[username]','$_POST[password]','$type')";
mysql_query($sql3,$con) or die("not exicuted".mysql_error());



mysql_close($con);
echo "<script> alert(\"registerd successfully .....please login  \"); 
						document.location=\"login.html\";
							</script>";
							mysql_close($con);
?>
