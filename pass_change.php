<?php
$con=mysql_connect("localhost","root","")or die("cannot connect mysql ".mysql_error());
mysql_select_db("hostel management",$con);
$usn=$_POST['usn'];
$username=$_POST['username'];
$color=$_POST['color'];
$password =$_POST['password'];


$sql="SELECT color FROM student_details where usn='$usn' ";
$result=mysql_query($sql,$con);
if(mysql_num_rows($result)==0)
{
	
        
			echo "<script>  alert(\"not registered ..... please register   \");
						document.location=\"regs.html\";
							</script>";
   }


	while($row=mysql_fetch_array($result))
	{
		if($row[0]==$color)
		{
			$sql1="UPDATE login_details SET password='$password' WHERE (username='$username') ";

			mysql_query($sql1,$con)or die("not exicuted".mysql_error());;
			
        }
        else
        {
        	echo "<script>  alert(\"invalid details  \");
						document.location=\"pass_change.html\";
							</script>";

        }
        echo "<script>  alert(\"password changed successfully..... please login   \");
						document.location=\"login.html\";
							</script>";
    }
		
mysql_close($con);

?>
