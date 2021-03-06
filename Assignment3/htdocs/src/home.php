﻿<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
	<title>CSCB20</title>
	<meta charset='UTF-8'/>
	<link rel='stylesheet' href='css/home.css'/>
	<!-- Get fonts from Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab|Ubuntu" rel="stylesheet">
	</head>

	<body>
	
	<header>
		<span class='title'><h1> CSCB20 - Introduction to Databases and Web Applications</h1></span>
		<nav class='nav-wrapper'>
			<ul class='nav-buttons'>
				<li><a href = #>Home</a></li>
				<li><a href = 'https://piazza.com/mail.utoronto.ca/winter2016/cscb20/home' target='_blank'>Piazza</a></li>
				<li><a href = 'https://markus.utsc.utoronto.ca/cscb20w18/?locale=en' target='_blank'>Markus</a></li>
				<li><a href = #assignments>Assignments</a></li>
				<li><a href = #labs>Labs</a></li>
				<li><a href = #team>Course Team</a></li>
				<li><a href = 'CSCB20CourseSyllabus.pdf' target='_blank'> Syllabus </a></li>
				<?php
				if ($_SESSION['id'] == 0) { ?>
					<li><a href = fetch.php> My Marks </a></li>
					<li><a href = #feedback> Feedback </a></li>
				<?php } ?>
				<?php
				if ($_SESSION['id'] == 2) { ?>
					<li><a href = fetch.php> Class Marks </a></li>
					<li><a href = feedback.php> See Feedback </a></li>
					<li><a href = #marks> Enter Marks </a></li>
				<?php } ?>
				<li><a href = index.php> Logout </a></li>
			</ul>
		</nav>
	</header>
	
	<div class='all-site'>
		<div id ='home'>
			<h2> General Info </h2>
			<hr/>
			<p> This is a practical introduction to databases and Web app development. Databases: terminology and applications; creating, querying and updating databases; the entity-relationship model for database design. Web documents and applications: static and interactive documents; 
			Web servers and dynamic server-generated content; Web application development and interface with databases. <strong>REMEMBER</strong> this course is meant to expand on your creativity and
			to have <em>fun</em>! 
			</p>

			<p style='padding-left: 50px;'><strong>PREREQUISITE:</strong> Some experience with programming in an imperative language such as Python, Java, C.</p>
			<p style='padding-left: 50px;'><strong>EXCLUSION:</strong> This course must be taken after - or concurrently with - any C or D-level CSC course.</p>
			<h3> Instructor: Abbas Attarwala </h3>
			<h4> Email: abbas.attarwala@utoronto.ca</h4> 
			<hr/>
		</div>
		
	</div>
	<div id='assignments'></div>
	<div class = 'all-site'>
			<h2> Assignments </h2>
				<hr/>
				<p>Due: 01/04/18 <a href=# target='_blank'>Assignment1.pdf</a></p>
				<p>Due: 01/05/18 <a href=# target='_blank'>Assignment2.pdf</a></p>
				<p>Due: 01/06/18 <a href=# target='_blank'>Assignment3.pdf</a></p>
	</div>

	<div id='labs'></div>
	<div class = 'all-site'>
			<h2> Labs </h2>
				<hr/>
			<h3> Week 1 </h3>
			<a href=# target='_blank'>Lab 1: Lab.pdf</a>
			<h3> Week 2 </h3>
			<a href=# target='_blank'>Lab 2: Lab.pdf</a>
			<h3> Week 3 </h3>
			<a href=# target='_blank'>Lab 3: Lab.pdf</a>
			<h3> Week 4 </h3>
			<a href=# target='_blank'>Lab 4: Lab.pdf</a>
			<h3> Week 5 </h3>
			<a href=# target='_blank'>Lab 5: Lab.pdf</a>
			<h3> Week 6 </h3>
			<a href=# target='_blank'>Lab 6: Lab.pdf</a>
			<h3> Week 7 </h3>
			<a href=# target='_blank'>Lab 7: Lab.pdf</a>
			
	</div>
	
	<div id='team'></div>
	<div class = 'all-site'>
			<h2> Course Team </h2>
				<hr/>
<div class="divTable">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableC">&nbsp;Title</div>
<div class="divTableC">&nbsp;Name</div>
<div class="divTableC">&nbsp;Email</div>
</div>
<div class="divTableRow">
<div class="divTableCell">&nbsp;Instructor</div>
<div class="divTableCell">&nbsp;Abbas Attarwala</div>
<div class="divTableCell">&nbsp;abbas.attarwala@utoronto.ca</div>
</div>
<div class="divTableRow">
<div class="divTableCell">&nbsp;Teaching Assistant</div>
<div class="divTableCell">&nbsp;[Enter Name]</div>
<div class="divTableCell">&nbsp;[Enter email]</div>
</div>
<div class="divTableRow">
<div class="divTableCell">&nbsp;Teaching Assistant</div>
<div class="divTableCell">&nbsp;[Enter Name]</div>
<div class="divTableCell">&nbsp;[Enter email]</div>
</div>
<div class="divTableRow">
<div class="divTableCell">&nbsp;Teaching Assistant</div>
<div class="divTableCell">&nbsp;[Enter Name]</div>
<div class="divTableCell">&nbsp;[Enter email]</div>
</div>
</div>
</div>
</div>
<!-- DivTable.com -->

	
	
	</div>
	<?php
	if ($_SESSION['id'] == 0) { ?>
	<div id='feedback'></div>
	<div class = 'all-site'>
		<h2> Feedback </h2>
		<form>
			Enter Feedback:<br/>
			<textarea rows='4' cols='50'></textarea><br/>
			<button>Submit</button>
		</form>
		<!-- Image from https://internetingishard.com/html-and-css/links-and-images/ -->
		<span style='float: right;'><img src='images/mochi.png'/></span>
	</div>
	<?php } ?>

	<?php
	if ($_SESSION['id'] == 2) { ?>
	<div id='marks'></div>
	<div class = 'all-site'>
		<h2> Enter Marks </h2>
			Enter Marks:<br/>
		<form action = "entermarks.php" method = "post">
            <label><b>Username:</b></label><input type = "text" name = "username" class = "box"/><br /><br />
            <label><b>A1:</b>_______</label><input type = "text" name = "a1" class = "box"/><br /><br />
            <label><b>A2:</b>_______</label><input type = "text" name = "a2" class = "box"/><br /><br />
            <label><b>A3:</b>_______</label><input type = "text" name = "a3" class = "box"/><br /><br />
           	<label><b>Midterm:</b>__</label><input type = "text" name = "midterm" class = "box"/><br /><br />
            <label><b>Final:</b>_____</label><input type = "text" name = "final" class = "box"/><br /><br />
            <input type = "submit" value = " Submit " style = "padding: 3px;" /><br />
        </form>
	</div>
	<?php } ?>

	<footer class='site-footer'>
		<a href = 'http://web.cs.toronto.edu/'> Faculty of Computer Science at UofT </a>
		<p> Designed by Minh Nguyen & Tyson Tran </p>
	</footer>

</body>
</html>
