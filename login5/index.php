<?php
ob_start();
session_start();
require_once 'dbconnect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
// select logged in users detail
$res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hello,<?php echo $userRow['email']; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/index.css" type="text/css"/>
</head>
<body>

<!-- Navigation Bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Website Name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">First Link</a></li>
                <li><a href="#">Second Link</a></li>
                <li><a href="#">Third Link</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <span
                            class="glyphicon glyphicon-user"></span>&nbsp;Logged
                        in: <?php echo $userRow['email']; ?>
                        &nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>




<div class="container">
    <!-- Jumbotron-->
      <form name="frmFormMail" id="frmFormMail" action='assets/jobformmail.php' method='post' enctype='multipart/form-data' autocomplete="on">
      <input type='hidden' name='formmail_submit' value='Y'>
      <input type='hidden' name='mod' value='ajax'>
      <input type='hidden' name='func' value='submit'>
      <!-- Left Column -->
      <div class="section group">
        <div class="col span_1_of_2">
          <div class="sub-header">Personal Information</div>
          <div>&nbsp;</div>
          <div class="input-row">
            <label class="control-label" for="field_0">Business Name <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="field_0" id="field_0" value="" maxlength="50" class="form-control" placeholder="Your Name" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_0" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_1">Business URL<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="field_1" id="field_1" value="" maxlength="50" class="form-control" placeholder="Your Age" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; font-size:12px; margin-top:5px;" class="error" for="field_1" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_2">Business Address <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input type="text" name="field_2" id="field_2" value="" maxlength="50" class="form-control" placeholder="First Line" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_2" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_3">What Would You Like To Achieve In Your Buniness? i.e. Sales Customers etc<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input type="text" name="field_3" id="field_3" value="" maxlength="50" class="form-control" placeholder="Town/City" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_3" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_4">Where can we find out more Information About Your Business upload any supporting Material Below<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <input type="text" name="field_4" id="field_4" value="" maxlength="50" class="form-control" placeholder="State/Country" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_4" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_5">App Features<span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
              <input id="checkBox" type="checkbox"> Image Gallery<br>
               <input id="checkBox" type="checkbox"> 
               Bokking Report<br>
                <input id="checkBox" type="checkbox"> 
                Booking via Existing Online System<br> <input id="checkBox" type="checkbox"> 
                Display an online shop /store<br> 
                <input id="checkBox" type="checkbox"> 
                Muliple Renew With /one App<br> <input id="checkBox" type="checkbox"> 
                Other<br>
              
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_5" generated="true"></label>
            </div>
          </div>
        </div>
        <!-- Right Column -->
        <div class="col span_1_of_2">
          <div class="sub-header">Your Application</div>
          <div>&nbsp;</div>
          <div class="input-row">
            <label class="control-label" for="field_6"> Job <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span>
                <select name="field_6" id="field_6" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Video Subtitler Volunteer">Video Subtitler Volunteer</option>
                  <option value="Other Local Volunteer">Other Local Volunteer</option>
                  <option value="Local Video Editor/Camera Assistant Volunteer">Local Video Editor/Camera Assistant Volunteer</option>
                  <option value="Local Trustees Wanted - Register Intrest">Local Trustees Wanted - Register Interest</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_6" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_7">Job Hours <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span>
                <select name="field_7" id="field_7" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="Full Time">Full Time</option>
                  <option value="Part Time">Part Time</option>
                  <option value="Less than 3 days">Less than 3 days</option>
                  <option value="1 day or less">1 day or less</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_7" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_8">Qualifications &amp; Experience <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span>
                <select name="field_8" id="field_8" class="form-control">
                  <!-- Add take away change options - change text twice per option to show in email results -->
                  <option value="" selected="selected">- Please Select Option -</option>
                  <option value="No Qualifications - No Experience">No Qualifications - No Experience</option>
                  <option value="No Qualifications - Experienced">No Qualifications - Experienced</option>
                  <option value="Qualified - No Experience">Qualified - No Experience</option>
                  <option value="Qualified & Experienced">Qualified & Experienced</option>
                  <option value="Highly Qualified - No Experience">Highly Qualified - No Experience</option>
                  <option value="No Qualifications - Highly Experienced">No Qualifications - Highly Experience</option>
                  <option value="Highly Qualified & Highly Experienced">Highly Qualified & Highly Experienced</option>
                </select>
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_8" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_09">Employment Availability Date <span style="color:red;">*</span></label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="text" name="field_9" id="field_9" value="" maxlength="50" class="form-control datepicker" placeholder="Earliest start date from today dd-mm-yyyy" onKeyPress="return restrictChars(event, this)">
              </div>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_9" generated="true"></label>
            </div>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_10">Attach CV File <span style="color:red;">*</span></label>
            <div class="input-group">
              <label class="input-group-btn"> <span class="btn btn-primary"> Browse
              <input type="file" id="field_10" name="field_10" style="display: none;">
              </span> </label>
              <input type="text" class="form-control file" readonly>
            </div>
            <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_10" generated="true"></label>
          </div>
          <div class="input-row">
            <label class="control-label" for="field_11">Attach Other File (optional)</label>
            <div class="input-group">
              <label class="input-group-btn"> <span class="btn btn-primary"> Browse
              <input type="file" id="field_11" name="field_11" style="display: none;">
              </span> </label>
              <input type="text" class="form-control file" readonly>
            </div>
            <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_11" generated="true"></label>
          </div>
        </div>
      </div>
      <!-- Column Full Start -->
      <div class="section group">
        <div class="col span_1_of_1">
          <div class="sub-header" style="margin-bottom:-15px;">Contact Information</div>
        </div>
        <!-- Column Left -->
        <div class="section group">
          <div class="col span_1_of_2">
            <div class="input-row">
              <div>&nbsp;</div>
              <label class="control-label" for="field_12">Email <span style="color:red;">*</span></label>
              <div class="inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="text" name="field_12" id="field_12" value="" maxlength="50" class="form-control" placeholder="Email" onKeyPress="return restrictChars(event, this)">
                </div>
                <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_12" generated="true"></label>
              </div>
            </div>
          </div>
          <!-- Column Right -->
          <div class="col span_1_of_2">
            <div>&nbsp;</div>
            <div class="input-row">
              <label class="control-label" for="field_13">Phone <span style="color:red;">*</span></label>
              <div class="inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input type="text" name="field_13" id="field_13" value="" maxlength="50" class="form-control phone" placeholder="Phone" onKeyPress="return restrictChars(event, this)">
                </div>
                <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_13" generated="true"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Column End -->
      <!-- Full Column -->
      <div class="section group">
        <div class="col span_1_of_1" style="margin-top:-15px;">
          <div class="input-row">
            <div class="sub-header">Comments</div>
            <div>&nbsp;</div>
            <label class="control-label" for="field_12">Comments/Questions (optional)</label>
            <div class="inputGroupContainer">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                <textarea name="field_14" id="field_14" class="form-control" maxlength="1000" placeholder="Please add any comments or questions" onKeyUp="limitTextCount('field_14', 'divcount', 1000);" onKeyDown="limitTextCount('field_14', 'divcount', 1000);" style="height:60px;"></textarea>
              </div>
              <span id="divcount" style="font-size:0.8em; color:#999999; margin-top:4px; float:right;">1000 Countdown</span>
              <label style="color:red; font-weight:normal; font-size:12px; margin-top:5px;" class="error" for="field_14" generated="true"></label>
            </div>
          </div>
          <div>&nbsp;</div>
          <div style="display:block; min-height:150px; margin-top:-5px;">
            <div class="sub-header">Security</div>
            <div>&nbsp;</div>
            <div class="inputGroupContainer">
              <!-- Google No Captcha Human Security Scripts -->
             
              <div class="g-recaptcha" data-sitekey="Enter Your Public Site Key Here"  data-callback="recaptchaCallback" style="transform:scale(0.90);-webkit-transform:scale(0.90);transform-origin:0 0;-webkit-transform-origin:0 0; color:transparent; font-weight:normal; line-height:0px;" tabindex="6"> </div>
              <div>
                <label style="color:red; font-weight:normal; font-size:12px; position:relative; top:-8px;" class="error" for="hiddenRecaptcha" generated="true"></label>
              </div>
            </div>
          </div>
          <div class="input-row" style="margin-bottom:-40px;">
            <div class="inputGroupContainer">
              <!-- For blue button change btn-default to btn-primary - You can remove button width:100%; to standard size -->
              <input type="submit" value="Submit" class="btn btn-primary">
            </div>
          </div>
        </div>
      </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
