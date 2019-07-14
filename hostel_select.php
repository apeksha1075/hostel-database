<form action="seat.php" method="post">



<select id="H_NAME" name="H_NAME" required>                      
  <option value="0">--SELECT HOSTEL--</option>
  <option value="hemavati" required>HEMAVATI </option>
  <option value="sharavati" required>SHARAVATI</option>
  <option value="narmada" required>NARMADA</option>
</select>

<select id="H_SECT" name="H_SECT" required>                      
  <option value="0">--SELECT ROOM TYPE--</option>
  <option value="1" required>1_SECTOR</option>
  <option value="2" required>2_SECTOR</option>
  <option value="3" required>3_SECTOR</option>
</select>


		<input type="submit" name="submit" value="next">
</form>

<?php

  ?>