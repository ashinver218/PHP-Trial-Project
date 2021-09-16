<!DOCTYPE html>
<?php
$myFile1 = "teacher1_grades.txt";
$myFile2 = "teacher2_grades.txt";
$myFile3 = "teacher3_grades.txt";
$name = "students_name.txt";
$Sname = file($name);
$name1 = $Sname[0];
$science1 = file($myFile1);
$english1 = file($myFile2);
$bible1 = file($myFile3);
$PSWW1 = $science1[0];
$PSPT1 = $science1[1];
$PSQA1 = $science1[2];
$PEWW1 = $english1[0];
$PEPT1 = $english1[1];
$PEQA1 = $english1[2];
$PBWW1 = $bible1[0];
$PBPT1 = $bible1[1];
$PBQA1 = $bible1[2];
$SSTU1_GRADE = $science1[3];
$SSTU2_GRADE = $english1[3];
$SSTU3_GRADE = $bible1[3];
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_students_grades.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">

			<div class="leftmenu">
        <ul>
				  <?php echo "<li> $name1 </li>"; ?>
          <li> 4032121500063 </li>
        </ul>
			</div>

			<div class="rightmenu">
				<ul>
					<li ><a id="menu2" style="margin-left: 145px;" href="student1_home.php">Home</a></li>
					<li><a id="menu2" href="student1_grades.php">Grades</a></li>
					<li><a id="menu2" href="student1_schedules.php">Schedules</a></li>
					<li> <a id="menu2" href="login.php">LogOut</a></li>
				</ul>
			</div>
			<div class="grades_table">
				<table>
					<thead>
					<tr>
						<th><center>Subject</center></th>
						<th><center>Written Works</center></th>
						<th><center>Performance Task</center></th>
				    <th><center>Quarterly Assesment</center></th>
						<th><center>Total</center></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><center>Science</center></td>
						<td><center><?php echo $PSWW1; ?></center></td>
						<td><center><?php echo $PSPT1; ?></center></td>
						<td><center><?php echo $PSQA1; ?></center></td>
						<td><center><?php echo round($SSTU1_GRADE); ?></center></td>
					</tr>
					<tr>
						<td><center>English</center></td>
						<td><center><?php echo $PEWW1; ?></center></td>
						<td><center><?php echo $PEPT1; ?></center></td>
						<td><center><?php echo $PEQA1; ?></center></td>
						<td><center><?php echo round($SSTU2_GRADE); ?></center></td>
					</tr>
					<tr>
						<td><center>Bible</center></td>
						<td><center><?php echo $PBWW1; ?></center></td>
						<td><center><?php echo $PBPT1; ?></center></td>
						<td><center><?php echo $PBQA1; ?></center></td>
						<td><center><?php echo round($SSTU3_GRADE); ?></center></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
</body>
</html>
