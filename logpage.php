<?php
$con=mysql_connect("localhost","root","")or die("cannot connect mysql ".mysql_error());
mysql_select_db("hostel management",$con);
$userid=$_POST['username'];
$pass =$_POST['password'];

if($userid=="admin")
{

	echo "<script> alert(\"register for admin\"); 
						document.location=\"admin_login.html\";
							</script>";
}
if($userid=="staff")
{

	echo "<script> alert(\"register for staff\"); 
						document.location=\"staff_login.html\";
							</script>";
}
$sql="SELECT * FROM login_details where username ='$userid' and password='$pass'";
$result=mysql_query($sql,$con);
if(mysql_num_rows($result)==0)
{
	
        
			echo "<script>  alert(\"invalid user_name or password  \");
						document.location=\"login.html\";
							</script>";
   }


	while($row=mysql_fetch_array($result))
	{
		if($row[2]=="admin")
		{
			echo "<script>  
						document.location=\"admin.html\";
							</script>";
        }

		if($row[2]=="staff")
        {
			echo "<script>  
						document.location=\"staff.html\";
							</script>";
        }

        if($row[2]=="student")
			echo "<script>  
						document.location=\"hostel_select.php\";
							</script>";
	}
mysql_close($con);

?>
