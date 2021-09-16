<!DOCTYPE html>
<?php
$name = "students_name.txt";
$Sname = file($name);
$name1 = $Sname[2];
 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_students_schedules.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">

			<div class="leftmenu">
        <ul>
				  <?php echo "<li> $name1 </li>"; ?>
          <li> 403212150234 </li>
        </ul>
			</div>

			<div class="rightmenu">
				<ul>
					<li ><a id="menu2" style="margin-left: 145px;" href="student3_home.php">Home</a></li>
					<li><a id="menu2" href="student3_grades.php">Grades</a></li>
					<li><a id="menu2" href="student3_schedules.php">Schedules</a></li>
					<li> <a id="menu2" href="login.php">LogOut</a></li>
				</ul>
			</div>
			<div class="grades_table">
				<table>
					<thead>
					<tr>
						<th><center>Time</center></th>
						<th><center>Monday</center></th>
						<th><center>Tuesday</center></th>
				    <th><center>Wednesday</center></th>
						<th><center>Thursday</center></th>
						<th><center>Friday</center></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><center>7:15</center></td>
						<td><center>Math</center></td>
						<td><center>Bible</center></td>
						<td><center>Science</center></td>
						<td><center>Math</center></td>
						<td><center>Bible</center></td>
					</tr>
					<tr>
						<td><center>8:15</center></td>
						<td><center>Bible</center></td>
						<td><center>Science</center></td>
						<td><center>Math</center></td>
						<td><center>Bible</center></td>
						<td><center>Science</center></td>
					</tr>
					<tr>
						<td><center>9:15</center></td>
						<td><center>Science</center></td>
						<td><center>Math</center></td>
						<td><center>Bible</center></td>
						<td><center>Science</center></td>
						<td><center>Math</center></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>

</body>
</html>
