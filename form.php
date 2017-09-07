<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Job Application Form</title>
<!-- Add to Head -->
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<script src="//s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
<script src='//www.google.com/recaptcha/api.js'></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css" rel="stylesheet" />
<script language="JavaScript" type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<link rel="stylesheet" href="assets/css/html5reset.css" media="all">
<link rel="stylesheet" href="assets/css/col.css" media="all">
<link rel="stylesheet" href="assets/css/1cols.css" media="all">
<link rel="stylesheet" href="assets/css/2cols.css" media="all">
<!-- jQuery Form Validation code -->
<script type="text/javascript" language="JavaScript">
<!--
//File upload button
$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
	$("#field_10" ).trigger( "focus" );
	$("#field_10" ).trigger('keyup');
	$("#field_11" ).trigger( "focus" );
	$("#field_11" ).trigger('keyup');
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
}); 
// Phone allows for internatonal numbers and ext 
jQuery.validator.addMethod("phone", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); 
	return this.optional(element) || phone_number.length > 9 &&
		phone_number.match(/^((\+)?[1-9]{1,2})?([-\s\.\(\)\])?((\(\d{1,4}\))|\d{1,4})(([-\s\.\(\)\])?[0-9]{1,12}){1,2}(\s*(ext|x)\s*\.?:?\s*([0-9]+))?$/);
}, "Please specify a valid phone number");

// Removes Error Message When reCaptcha is Checked Valid
function recaptchaCallback() {
  $('#hiddenRecaptcha').valid();
};

// Set Max File Attachment Size 
$.validator.addMethod(
    "maxfilesize",
    function (value, element) {
        return this.optional(element) || (element.files && element.files[0]
                               && element.files[0].size < 1024 * 1024 * 4); // Set the * 2) 2MB to max mb and test
    },
    'Maximum file size limit is 4MB'
);

// Form Validation
$(function () {
   
$("#frmFormMail").validate({
        ignore: ".ignore",
        
        invalidHandler : function() {
            $('html, body').animate({
                scrollTop: $("#frmFormMail").offset().top // scroll top to your form on error
            }, 'slow' );
        },
        // Specify the validation rules
        rules: {
            field_0: { // Name
                required: true, // true required - false not required
            },
            field_1: { // Age
                required: true,
            },
            field_2: { // Address
                required: true,
            },
            field_3: { // City
                required: true,
            },
            field_4: { // State
                required: true,
            },
            field_5: { // Zip Post Code
                required: true,
            },
            field_6: { // Select Job
                required: true,
            },
            field_7: { // Job full part time
                required: true,
            },
			field_8: { // Qualified - Experienced
                required: true,
            },
            field_9: { // Empolyment start date
                required: true,
                minlength: 3,
            },
            field_10: { // Resume
                required: true, // required: false not a required field, required: true required field
                accept: "jpg|jpe|jpeg|png|gif|odt|doc|docx|pdf|txt|html", // Add file types you wish to accept
                maxfilesize: true,  // Set false if unlimited size  
            },
            field_11: { // Resume
                required: false, // required: false not a required field, required: true required field
                accept: "jpg|jpe|jpeg|png|gif|odt|doc|docx|pdf|txt|html", // Add file types you wish to accept
                maxfilesize: true,  // Set false if unlimited size  
            },
            field_12: { // Email
                required: true,
				email: true,
                minlength: 5,
            },
            field_13: { // Phone
                required: true,
            },
            field_14: { // Comments
                required: false, // set to true if required
            },
			
            hiddenRecaptcha: {
                required: function () {
                if (grecaptcha.getResponse() == '') {
                     return true;
                } else {
                     return false;
			    }
			  }				
           },
       },
        // Specify the validation error messages
        messages: {
	        field_10: {
                required: "Required field", // Required will only show up if rules are set to true required above
                accept: "File type is not accepted"
            },
			field_11: {
	            required: "Required field", // Required will only show up if rules are set to true required above
                accept: "File type is not accepted"
            },
			hiddenRecaptcha: {
                required: "Human response required"
            },
			submitHandler: function(form) // CALLED ON SUCCESSFUL VALIDATION
                {
                window.location.replace='assets/redirect.html'; // Add your custom form submitted redirect page full path here the forward slash / will redirect to your home page
			}
        },
   });

});
// Date Picker
$(document).ready(function() {
  $("input.datepicker").singleDatePicker();
});

$.fn.singleDatePicker = function() {
  $(this).on("apply.daterangepicker", function(e, picker) {
    picker.element.val(picker.startDate.format(picker.locale.format));
  });
  return $(this).daterangepicker({
    locale: {
      format: 'DD-MM-YYYY' // Change to local formats YYYY-MM-DD - MM-DD-YYYY
    },
    singleDatePicker: true,
    autoUpdateInput: false
  });
};
// Textarea Countdown
function limitTextCount(limitField_id, limitCount_id, limitNum)
{
    var limitField = document.getElementById(limitField_id);
    var limitCount = document.getElementById(limitCount_id);
    var fieldLEN = limitField.value.length;

    if (fieldLEN > limitNum)
    {
        limitField.value = limitField.value.substring(0, limitNum);
    }
    else
    {
        limitCount.innerHTML = (limitNum - fieldLEN) + ' Countdown';
    }
}
-->
</script>
<style type="text/css">
<!--
.margin {
   margin:8px;
}
.container{
	max-width:800px; /* change this to get your desired form width */
    width:100%;
	margin: 0 auto;
	border:solid 1px #CCCCCC; /* Remove outer border if wished */
	padding:10px;
	margin-top:5px;
	margin-bottom:40px;
}
 .header {
  font-size:24px;
  font-weight:normal;
  background-color:#69baff;
  color:white;
  max-width:100%;
  padding:10px;
  }
 .sub-header {
  font-size:20px;
  font-weight:normal;
  background-color:;
  border-bottom:solid 1px #69baff;
  color:#1f98ff;
  max-width:100%;
  padding:5px;
  }
/* Placeholder disappears on focus */
input:focus::-webkit-input-placeholder  {color:transparent !IMPORTANT;}
input:focus::-moz-placeholder   {color:transparent !IMPORTANT;}
input:-moz-placeholder   {color:transparent !IMPORTANT;}
textarea:focus::-webkit-input-placeholder  {color:transparent !IMPORTANT;}
textarea:focus::-moz-placeholder   {color:transparent !IMPORTANT;}
textarea:-moz-placeholder   {color:transparent !IMPORTANT;}
textarea{ height:70px !IMPORTANT;}
input[type="file"] {
  color:#000 !IMPORTANT;    
}
input.file[type="text"] {
  background-color:white !IMPORTANT;
}
.control-label {font-size:14px; font-weight:bold; margin-bottom:5px; !IMPORTANT;}
.input-row {
  display:block;
  min-height:85px;
  margin-bottom:-5px;
}
input:-webkit-autofill {
    -webkit-box-shadow:0 0 0 50px white inset !important; /* Change the color to your own background color */
    -webkit-text-fill-color: #333 !important;
}
input:-webkit-autofill:focus {
    -webkit-box-shadow: /*your box-shadow*/,0 0 0 50px white inset !important;
    -webkit-text-fill-color: #333 !important;
}
-->
</style>
</head>
<body>
<div class="margin">
  <div class="container">
    <div class="header">CONSULTATION FORM</div>
    <div>&nbsp;</div>
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
</div>
</body>
</html>
