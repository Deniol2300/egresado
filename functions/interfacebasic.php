<?php
/**
 ** Author: Sridhar Siva Subramanian
 ** This is a veru basic CRUD application, which I used to 
 ** demonstrate PHP in my class. Hope this helps in 
 ** understanding PHP functions, classes, CRUD DB 
 ** connectivity, sessions, file upload, etc.,
 ** This is just a begginers demo. Upload the sql dump into 
 ** your database before eunning this project
  
 */
function head() {

	echo ' <!DOCTYPE html>
			<html>
			<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Digital Department</title>

			<link href="../css/bootstrap.min.css" rel="stylesheet">
			<link href="../css/datepicker3.css" rel="stylesheet">
			<link href="../css/bootstrap-table.css" rel="stylesheet">
			<link href="../css/styles.css" rel="stylesheet">

			

			<!--Icons-->
			<script src="../js/lumino.glyphs.js"></script>

			<!--[if lt IE 9]>
			<script src="../js/html5shiv.js"></script>
			<script src="../js/respond.min.js"></script>
			<![endif]-->	

			</head>';
}

function navbar() {
	echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Seguimiento</span>Egresado</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>'.$_SESSION["user"].' <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>';
}

function sidebar() {
	echo '<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li ><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li ><a href="addstu.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Egresados</a></li>
			<li><a href="addstaff.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Formacion Academica</a></li>
			<li><a href="addsubject.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Informacion Laboral</a></li>
			<li><a href="addclass.php"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg>Datos Laborales</a></li>
			<!--
			<li><a href="noncgpa.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg> Non CGPA entry</a></li>
			<li><a href="assignment.php"><svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"/></svg> Assignments</a></li>
			<li><a href="notification.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Post Notification</a></li>
			<li><a href="password.php"><svg class="glyph stroked key "><use xlink:href="#stroked-key"/></svg>Reset User Password</a></li>
			-->
			
		</ul>

	</div><!--/.sidebar-->
	';
}

function breadcrumb($crumb) {
	echo '<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">'.$crumb.'</li>
			</ol>
		</div>';
}

function scripts() {

	echo '	
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	';
}


function sidebar_student() {
	echo '<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li ><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<!--
			<li ><a href="addstu.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Informacion Personal</a></li>
			<li><a href="addstaff.php"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg>Informacion Academica</a></li>
			<li><a href="addsubject.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Informacion Laboral</a></li>
			<li><a href="addclass.php"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg>Mis Ofertas Laborales</a></li>
			-->
			<li ><a href="noncgpa.php"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg> Informacion Personal</a></li>
			<li><a href="submit.php"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"/></svg>Informacion Academica</a></li>
			<li><a href="view.php"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Informacion Laboral</a></li>

			<li><a href="password.php"><svg class="glyph stroked key "><use xlink:href="#stroked-key"/></svg>Change Password</a></li>
			
			
		</ul>

	</div><!--/.sidebar-->
	';
}


function headervalue($headervariable) {
echo '<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">'.$headervariable.'</h1>
			</div>
		</div>';

}

function findexts ($filename) 
 { 
 $filename = strtolower($filename) ; 
 $exts = split("[/\\.]", $filename) ; 
 $n = count($exts)-1; 
 $exts = $exts[$n]; 
 return $exts; 
 } 