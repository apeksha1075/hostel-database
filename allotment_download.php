<?php  

    
    $con = mysql_connect("localhost", "root", "");  
    mysql_select_db('hostel management', $con);  
       
$usn=$_POST['usn'];     

$sql ="SELECT  fname As First_Name,lname AS Last_Name,usn As USN,branch AS Branch,sem AS Semester,bdate As Date_of_Birth,father_name AS Father_Name,mother_name AS Mother_Name,gender AS Gender,address AS Address,phone_no AS Phone_Number,parents_no Parents_Number,blood_group AS Blood_Group FROM student_details  WHERE usn='$usn' ";

$result=mysql_query($sql,$con); 

     
    
     while($row = mysql_fetch_array($result) )
     {
     
       
    echo "<table width='30%' height='400' align=center>";  
       
      
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>First Name:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['First_Name'] . "</td></tr>";  
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Last Name:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Last_Name'] . "</td></tr>";  
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>USN:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['USN'] . "</td></tr>";  
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Branch:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Branch'] . "</td></tr>";
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Semester:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Semester'] . "</td></tr>";
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Date of Birth:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Date_of_Birth'] . "</td></tr>";  
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Father Name:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Father_Name'] . "</td></tr>";
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Mother Name:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Mother_Name'] . "</td></tr>";
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Gender:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Gender'] . "</td></tr>";  
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Address:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Address'] . "</td></tr>";
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Phone Number:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Phone_Number'] . "</td></tr>";
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Parents Number:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Parents_Number'] . "</td></tr>";
    echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Blood Group:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row['Blood_Group'] . "</td></tr>";  
      
      
    
      
    
    echo "</table>";
    }
    $sql1 ="SELECT room_no AS Room_NO from alloted_rooms Where usn='$usn'";
$result1=mysql_query($sql1,$con);   
     while( $row1 = mysql_fetch_array($result1)) {   
      echo "<table width='30%' height='00' align=center>";  
     
      echo "<tr><td><FONT size=3><STRONG><font face='Arial'>Room Number:</font><br></STRONG></FONT></td><td><FONT size=3><STRONG><font face='Arial'>" . $row1['Room_NO'] . "</td></tr>";
       echo "</table>";
    }     
      mysql_close($con); 
    ?>