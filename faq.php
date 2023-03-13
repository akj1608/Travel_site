<title>SHARE AND CARE</title>

<form method="post" action="faq.php">
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  SHARE YOUR IDEA<input type="text" name="SHARE YOUR IDEA" value="<?php echo $SHARE YOUR IDEA;?>">
 
  <br><br>
  ASK ME? <input type="text" name="ASK ME? " value="<?php echo $ASK ME? ;?>">
 
  <br><br>
  MOBILE NO OR EMAIL-ID<input type="text" name="MOBILE NO OR EMAIL-ID" value="<?php echo $MOBILE NO OR EMAIL-ID;?>">
 
  <br><br>
  Date :  
            <select Date='NEW'>  
            <option value="">--- Month ---</option>  
            <option value="">--- Date ---</option>  
            <option value="">--- Year ---</option>  
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
 
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php

echo $SHARE YOUR IDEA;
echo "<br>";
echo $ASK ME?;
echo "<br>";
echo $MOBILE NO OR EMAIL-ID;
echo "<br>";
echo $DATE;
echo "<br>";
echo $GENDER;
?>