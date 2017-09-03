
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CRM Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="index.html" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="assets/dist/img/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                 <button type="button" class="close">×</button>
                 <form>
                   <input type="search" value="" placeholder="Search.." />
                   <button type="submit" class="btn btn-add">Search...</button>
                </form>
             </div>
             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                      <?php include 'orders.php'; ?>
                     <!-- Messages -->
                     <?php include 'messages.php'; ?>
                    
                     <!-- Notifications -->
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-bell"></i>
                        <span class="label label-warning">7</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-green"></i>Change Your font style</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-red"></i>
                                    check the system ststus..</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Tasks -->
                     <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-note2"></i>
                        <span class="label label-danger">6</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-success pull-right">50%</span>
                                       <h3><i class="fa fa-check-circle"></i> Theme color should be change</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-warning pull-right">90%</span>
                                       <h3><i class="fa fa-check-circle"></i> Fix Error and bugs</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-danger pull-right">80%</span>
                                       <h3><i class="fa fa-check-circle"></i> Sidebar color change</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-info pull-right">30%</span>   
                                       <h3><i class="fa fa-check-circle"></i> font-family should be change</h3>
                                    </a>
                                 </li>
                                 <li>
                                    <!-- Task item -->
                                    <a href="#"  class="border-gray">
                                       <span class="label label-success pull-right">60%</span>
                                       <h3><i class="fa fa-check-circle"></i> Fix the database Error</h3>
                                    </a>
                                 </li>
                                 <li>
                                    <!-- Task item -->
                                    <a href="#"  class="border-gray">
                                       <span class="label label-info pull-right">20%</span>
                                       <h3><i class="fa fa-check-circle"></i> data table data missing</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Help -->
                     <li class="dropdown dropdown-help hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-settings"></i></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-line-chart"></i> Networking</a>
                           </li>
                           <li><a href="#"><i class="fa fa fa-bullhorn"></i> Lan settings</a></li>
                           <li><a href="#"><i class="fa fa-bar-chart"></i> Settings</a></li>
                           <li><a href="login.html">
                              <i class="fa fa-wifi"></i> wifi</a>
                           </li>
                        </ul>
                     </li>
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-user"></i> User Profile</a>
                           </li>
                           <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                           <li><a href="login.html">
                              <i class="fa fa-sign-out"></i> Signout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         
         <?php 
		 
		 include 'menu.php';
		 
		 ?>
         
         
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1>CRM Admin Dashboard</h1>
                  <small>Very detailed & featured admin.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">11</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Active Client</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">4</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Active Admin</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-money fa-3x"></i>
                           <div class="counter-number pull-right">
                              <i class="ti ti-money"></i><span class="count-number">965</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Total Expenses</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">11</span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Running Projects</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Upcoming Events</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="work-touchpoint">
                              <div class="work-touchpoint-date">
                                 <span class="day">28</span>
                                 <span class="month">Apr</span>
                              </div>
                           </div>
                           <div class="detailswork">
                              <span class="label-custom label label-default pull-right">Email</span>
                              <a href="#" title="headings">Marketing policy</a> <br>
                              <p>Green Road - Dhaka,Bangladesh</p>
                           </div>
                           <div class="work-touchpoint">
                              <div class="work-touchpoint-date">
                                 <span class="day">2</span>
                                 <span class="month">Apr</span>
                              </div>
                           </div>
                           <div class="detailswork">
                              <span class="label-custom label label-default pull-right">skype</span>
                              <a href="#" title="headings">Accounting policy</a> <br>
                              <p>Kolkata, India</p>
                           </div>
                           <div class="work-touchpoint">
                              <div class="work-touchpoint-date2">
                                 <span class="day">17</span>
                                 <span class="month">Mrc</span>
                              </div>
                           </div>
                           <div class="detailswork">
                              <span class="label-custom label label-default pull-right">phone</span>
                              <a href="#" title="headings">Marketing policy</a> <br>
                              <p>Madrid  - spain</p>
                           </div>
                           <div class="work-touchpoint">
                              <div class="work-touchpoint-date2">
                                 <span class="day">3</span>
                                 <span class="month">jan</span>
                              </div>
                           </div>
                           <div class="detailswork">
                              <span class="label-custom label label-default pull-right">Mobile</span>
                              <a href="#" title="headings">Finance policy</a> <br>
                              <p>south Australia  - Australia</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Running Projects</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="runnigwork">
                              <span class="label-danger label label-default pull-right">Failed</span>
                              <i class="fa fa-dot-circle-o"></i>        
                              <a href="#">Database configuration</a><br>                          
                              <div class="progress runningprogress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="25%"></div>
                              </div>
                           </div>
                           <div class="runnigwork">
                              <span class="label-warning label label-default pull-right">progressing</span>
                              <i class="fa fa-dot-circle-o"></i>        
                              <a href="#">Design tool</a><br>                          
                              <div class="progress runningprogress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="15%"></div>
                              </div>
                           </div>
                           <div class="runnigwork">
                              <span class="label-success label label-default pull-right">progressing</span>
                              <i class="fa fa-dot-circle-o"></i>        
                              <a href="#">Internet configuration</a><br>                          
                              <div class="progress runningprogress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="45%"></div>
                              </div>
                           </div>
                           <div class="runnigwork">
                              <span class="label-info label label-default pull-right">progressing</span>
                              <i class="fa fa-dot-circle-o"></i>        
                              <a href="#">Banner completation</a><br>                          
                              <div class="progress runningprogress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="75%"></div>
                              </div>
                           </div>
                           <div class="runnigwork">
                              <span class="label-success label label-default pull-right">Success</span>
                              <i class="fa fa-dot-circle-o"></i>        
                              <a href="#">IT Solution</a><br>                          
                              <div class="progress runningprogress">
                                 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="50%"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Pending Works</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="Pendingwork">
                              <span class="label-warning label label-default pull-right">progressing</span>
                              <i class="fa fa-ban"></i>
                              <a href="#">Database tools</a>                          
                              <div class="upworkdate">
                                 <p>Jul 25, 2017 for Alimul Alrazy</p>
                              </div>
                           </div>
                           <div class="Pendingwork">
                              <span class="label-success label label-default pull-right">success</span>
                              <i class="fa fa-ban"></i>
                              <a href="#">Cabels</a>                          
                              <div class="upworkdate">
                                 <p>Jul 25, 2017 for Alimul</p>
                              </div>
                           </div>
                           <div class="Pendingwork">
                              <span class="label-danger label label-default pull-right">Failed</span>
                              <i class="fa fa-ban"></i>
                              <a href="#">Technologycal tools</a>                          
                              <div class="upworkdate">
                                 <p>Feb 25, 2017 for Alrazy</p>
                              </div>
                           </div>
                           <div class="Pendingwork">
                              <span class="label-warning label label-default pull-right">progressing</span>
                              <i class="fa fa-ban"></i>
                              <a href="#">Transaction</a>                          
                              <div class="upworkdate">
                                 <p>apr 25, 2017 for Mahfuz</p>
                              </div>
                           </div>
                           <div class="Pendingwork">
                              <span class="label-success label label-default pull-right">success</span>
                              <i class="fa fa-ban"></i>
                              <a href="#">Training tools</a>                          
                              <div class="upworkdate">
                                 <p>jun 25, 2017 for Alrazy</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Works Deadlines</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="Workslist">
                              <div class="worklistdate">
                                 <table class="table table-hover">
                                    <thead>
                                       <tr>
                                          <th>Task Name</th>
                                          <th>End Deadlines</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="info">
                                          <th scope="row">Alrazy</th>
                                          <td>Feb 25,2017</td>
                                       </tr>
                                       <tr>
                                          <th scope="row">Jahir</th>
                                          <td>jun 05,2017</td>
                                       </tr>
                                       <tr>
                                          <th scope="row">Sayeed</th>
                                          <td>Feb 05,2017</td>
                                       </tr>
                                       <tr>
                                          <th scope="row">Shipon</th>
                                          <td>jun 25,2017</td>
                                       </tr>
                                       <tr>
                                          <th scope="row">Rafi</th>
                                          <td>Jul 15,2017</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Works Announcements</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="Workslist">
                              <div class="worklistdate">
                                 <table class="table table-hover">
                                    <thead>
                                       <tr>
                                          <th>Works Type</th>
                                          <th>Name Of Worker</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="info">
                                          <td>Web Design</td>
                                          <td>Jr. Developer Alrazy</td>
                                       </tr>
                                       <tr>
                                          <td>Networking</td>
                                          <td>Jr. Developer Jahir</td>
                                       </tr>
                                       <tr>
                                          <td>Megento</td>
                                          <td>Jr. Developer Sayeed</td>
                                       </tr>
                                       <tr>
                                          <td>Php,Laravel</td>
                                          <td>Jr. Developer Muhim</td>
                                       </tr>
                                       <tr>
                                          <td>Html,css</td>
                                          <td>Frontend Developer Rafi</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Notice Board</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="Workslist">
                              <div class="worklistdate">
                                 <table class="table table-hover">
                                    <thead>
                                       <tr>
                                          <th>Notice</th>
                                          <th>Published By</th>
                                          <th>Date Added</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="info">
                                          <td>new notice</td>
                                          <td>Mr. Alrazy</td>
                                          <td>20th April 2017</td>
                                       </tr>
                                       <tr>
                                          <td>Urgent notice</td>
                                          <td>Mr. Alrazy</td>
                                          <td>20th june 2017</td>
                                       </tr>
                                       <tr>
                                          <td>Urgent notice</td>
                                          <td>Mr. Jahir</td>
                                          <td>26th june 2017</td>
                                       </tr>
                                       <tr>
                                          <td>Urgent notice</td>
                                          <td>Mr. leo</td>
                                          <td>3rd june 2017</td>
                                       </tr>
                                       <tr>
                                          <td>Notice</td>
                                          <td>Mr. Karim</td>
                                          <td>3rd July 2017</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- Barchart -->
                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>This Year Earnings & Expenses(Bar chart)</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="barChart" height="150"></canvas>
                        </div>
                     </div>
                  </div>
                  <!-- bar chart -->
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Weekly Earnings & Expenses</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <canvas id="singelBarChart" height="323"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.row -->
               <div class="row">
                  <div class="col-xs-12 col-sm-8">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Google Map</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="google-maps">
                              <iframe src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Calender</h4>
                           </div>
                        </div>
                        <!-- Monthly calender widget -->
                        <div class="panel panel-bd">
                           <div class="panel-body">
                              <div class="monthly_calender">
                                 <div class="monthly" id="m_calendar"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2016-2017 <a href="#">Thememinister</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- /.wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });
         
         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
         label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
         label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();         
      </script>
   </body>
</html>

