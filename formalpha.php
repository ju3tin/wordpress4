<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>We'd like a better understanding of what your business does.</h2>
Give us as much information as possible
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <p>Name Of Business:
  <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    What type of business are you: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Business Address 
    <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br>
  </p>
  <p>App Information</p>
  <p><br>
    What content would you like to appear in the menu:
  <input type="text" name="email2a" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span> <br>
  <br>
  Where can we find this information? If you have a file you may upload it in a moment.:
  <input type="text" name="email3" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span> </p>
  <p>What would you like to call your app? 
    <input type="text" name="website2" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <p>PROMOTIONS, LOYALTY AND VOUCHERS</p>
  <p>&nbsp;</p>
  <p>Your app will be a powerful marketing tool, several options exist to incentivise your users. Tell us what you would like to offer. A welcome voucher – is given to users who are referred by others (10% off a service is a good idea)</p>
  <p>App Features</p>
  <p>
    <input type="checkbox" name="checkbox" id="checkbox">
    Image gallery
    <label for="checkbox"></label>
 
 <br>
    <input type="checkbox" name="checkbox2" id="checkbox2">
    Booking /request<br>
    
       <input type="checkbox" name="checkbox2" id="checkbox2">
       Bookings must state the number of people?<br>
       <input type="checkbox" name="checkbox2" id="checkbox2">
       Book using existing online booking<br>
       <input type="checkbox" name="checkbox2" id="checkbox2">
       Show an online shop/store<br>
       <input type="checkbox" name="checkbox2" id="checkbox2">
       Show another site<br>
       <input type="checkbox" name="checkbox2" id="checkbox2">
  Multiple venues with one app</p>
  <p>Online shop/store url
    <input type="text" name="website3" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <p>Style Preferences</p>
  <p>Do you want the app design to be based on your website or printed material you provide? (if you want your app to closely match your website, tell us)
    <input type="text" name="website4" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <p>Do you like your current website? (provide detail)
    <input type="text" name="website5" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <p>Do you have a logo? Do you like your logo? (if you do not like your logo tell us why)
    <input type="text" name="website6" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <p>Are there any apps, websites or products that you love the sign of? (or hate the design of?)
    <input type="text" name="website7" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <p>Who is the primary audience for your app? (Young, old, down to earth, affluent)
    <input type="text" name="website8" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <p>Is there anything else you would like to tell us?
    <input type="text" name="website9" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span></p>
  <p><br>
    <br>
    Comment: 
    <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </p>
  </p>  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
