<?php 
$con=mysql_connect("localhost","root","") or die(mysql_error($con));

$db=mysql_select_db("hostel management") or die(mysql_error($con));

 ?>
 <head>
	<style type="text/css">
	* {
    margin: 5;
    padding: 0;

}
.seat {
    float: left;
    display: block;
    margin: 9px;
    width: 50px;
    height:50px;
    font-size:25px;
    border-radius:5px;
    animation-duration: 300ms;
    cursor: pointer;
    padding: 4px 0;
  	  background-image: url("q1.png");   
  	 -webkit-transition: width 5s; /* Safari */
    transition: width 1s;
   }
   .seat-select:checked+.seat {
   
   width: 50px;
    height:50px;
   background-image: url("1y.png"); 

  }
.seat:hover {
 box-shadow: 0 0 10px 1px #5C6AFF;
 
}
.seat-select {
    display: none;
}


.seatA {
    float: left;
    display: block;
    margin: 9px;
    width: 50px;
    height:50px;
    border-radius:5px;
    animation-duration: 300ms;
    cursor: pointer;
    padding: 4px 0;
     background-image: url("1r.png");    
     -webkit-transition: width 5s; /* Safari */
    transition: width 1s;
    font-style: bold;
    color: blue;
    font-size:25px;

   }
.seatA:hover {
 box-shadow: none;
 cursor: not-allowed;
 
}

 

</style></head>

<?php

$hostel_name=$_POST['H_NAME'];
$h_sect=$_POST['H_SECT'];
$res=mysql_query("select * from room_details where hostel_name='$hostel_name' ") or die(mysql_error());
  echo "<form  method='post' action='allot.php'>";
  echo strtoupper($hostel_name)." HOSTEL";

  while($row=mysql_fetch_array($res))
  {
 	echo "<table>";
	if ($row[3]==0 && $row[1]==$h_sect) 
	{ 
	 ?>
	
	<tr ><td>
    <section id="seats">

      <?php 
      echo "<input id='seat-$row[0]' class='seat-select' type='radio' value='$row[0]' name='s1' />";
      echo "<label for='seat-$row[0]' class='seat'> <br> &nbsp $row[0]</label></td>";
     echo "<td></tr>";
 	}   
	
      else
      {
      	?>
      	<tr ><td>

    <section id="seats">
      <?php  echo "<input id='seat-$row[0]' class='seat-select' type='radio' value='$row[0]' name='s1' disabled  />";
      echo "<label for='seat-$row[0]' class='seatA'> <br> &nbsp $row[0]</label></td> </tr>";
      }
      ?>
    
   </table>   
     <?php }?>


    <input type="submit" value="send" style="width: 80PX " />

    