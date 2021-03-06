<?php
include("../controller/pages_data.php");


?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/sidebar.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.js">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Abasyn University</title>
</head>






<body class="container-fluid">
<table class="table">
	<tr>
		<td id="td">
          <a href="../index.html"><img class="img-responsive2" src="../images/logo1.png"></a>
        </td>
          <td id="td">
          <input type="text" class="search_icon" name="search" placeholder="Search..">
    </td>     
  </tr>
</table>


<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="../index.html" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../index.html">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="vision_mission.php">Vision & Mission</a></li>
            <li><a href="objectives.php">Objectives</a></li>
            <li><a href="messages.php">Messages</a></li>

          </ul>        
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Academic Programs <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="undergraduate.php">Undergraduate</a></li>
            <li><a href="graduate.php">Graduate</a></li>
            <li><a href="departments.php">Departments</a></li>
            <li><a href="rules_policies.php">Rules & Policies</a></li>
          </ul>        

        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Admission & Aids <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="admission_overview.php">Admission Overview</a></li>
            <li><a href="financial_aid.php">Financial Aid</a></li>
            <li><a href="scholarship.php">Scholarships</a></li>
            <li><a href="fee_structure.php">Fee Structure</a></li>
            <li><a href="admission_procedure.php">Admission Procedure</a></li>
          </ul>
        </li>

          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Faculty <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="d_electrical.php">Department of Electrical Engineering</a></li>
              <li><a href="d_computing.php">Department of Computing & Technology</a></li>
              <li><a href="d_civil.php">Department of Civil Engineering</a></li>
              <li><a href="d_management.php">Department of Management Sciences</a></li>
              <li><a href="d_life.php">Department of Life Sciences</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Research <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="projects.php">Projects</a></li>
              <li><a href="publications.php">Publications</a></li>
              <li><a href="intl_conferences.php">Abasyn Intl Conference</a></li>
              <li><a href="journal.php">Journal of Social Sciences</a></li>
            </ul>
          </li>
          
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">Student <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="activities_clubs.php">Activities & Clubs</a></li>
              <li><a href="student_handbook.php">Student Handbook</a></li>
              <li><a href="digital_library.php">Digital Library</a></li>
              <li><a href="">Learning Management System</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Center of M & E <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="about_center.php">About the Center</a></li>
              <li><a href="obe_auic.php">OBE at AUIC</a></li>
              <li><a href="software_system.php">Software System</a></li>
              <li><a href="research_analysis.php">Research And Analysis</a></li>
            </ul>
          </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
              Our Social Sites
                <div class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                                
                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" name="mypassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block" name="login_btn">Login</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> keep me logged-in
                       </label>
                    </div>
                 </form>
              </div>
              <div class="bottom text-center">
                New here ? <a href="./register.php"><b>Join Us</b></a>
              </div>
           </div>
        </li>
      </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-default sidebar" role="navigation">
  <div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>      
  </div>
  <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li ><a href="#">Home <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hand-right"></span></a></li>
      <li>
        <li class="active"><a href="#">About <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hand-right"></span></a></li>
      </li>          
      <li ><a href="#">History <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hand-right"></span></a></li>        
      <li ><a href="#">Vision & Mission<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hand-right"></span></a></li>
      <li ><a href="#">Objectives<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hand-right"></span></a></li>
      <li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hand-right"></span></a></li>

    </ul>
  </div>
</div>
</nav>
<div>
<?php
  get_undergrad_desc();

?>
</div>

</body>
</html>