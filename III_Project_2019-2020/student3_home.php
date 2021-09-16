<!DOCTYPE html>
<?php
$myFile1 = "teacher1_grades.txt";
$myFile2 = "teacher2_grades.txt";
$myFile3 = "teacher3_grades.txt";
$name = "students_name.txt";
$Sname = file($name);
$name1 = $Sname[2];
$science3 = file($myFile1);
$english3 = file($myFile2);
$bible3 = file($myFile3);
$SSTU1_GRADE = $science3[11];
$SSTU2_GRADE = $english3[11];
$SSTU3_GRADE = $bible3[11];
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_students.css">
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
						<th><center>Subject</center></th>
						<th><center>Grades</center></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><center>Bible</center></td>
						<td><center><?php echo round($SSTU1_GRADE); ?></center></td>
					</tr>
					<tr>
						<td><center>Math</center></td>
						<td><center><?php echo round($SSTU2_GRADE); ?></center></td>
					</tr>
					<tr>
						<td><center>Science</center></td>
						<td><center><?php echo round($SSTU3_GRADE); ?></center></td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="Requirement_table">
				<table>
					<thead>
					<tr>
						<th><center>Requirement</center></th>
						<th><center>To Be passed</center></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><center>Bible</center></td>
						<td><center>3</center></td>
					</tr>
					<tr>
						<td><center>Math</center></td>
						<td><center>3</center></td>
					</tr>
					<tr>
						<td><center>Science</center></td>
						<td><center>1</center></td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="Absent_table">
				<table>
					<thead>
					<tr>
						<th><center>Absents</center></th>
						<th><center>Cuttings</center></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><center>3</center></td>
						<td><center>1</center></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>

</body>
</html>
