<!DOCTYPE html>
<?php
$myFile1 = "teacher1_grades.txt";
$myFile2 = "teacher2_grades.txt";
$myFile3 = "teacher3_grades.txt";
$name = "students_name.txt";
$Sname = file($name);
$name1 = $Sname[1];
$science2 = file($myFile1);
$english2 = file($myFile2);
$bible2 = file($myFile3);
$PSWW2 = $science2[4];
$PSPT2 = $science2[5];
$PSQA2 = $science2[6];
$PEWW2 = $english2[4];
$PEPT2 = $english2[5];
$PEQA2 = $english2[6];
$PBWW2 = $bible2[4];
$PBPT2 = $bible2[5];
$PBQA2 = $bible2[6];
$SSTU1_GRADE = $science2[7];
$SSTU2_GRADE = $english2[7];
$SSTU3_GRADE = $bible2[7];
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
          <li> 403212150134</li>
        </ul>
			</div>

			<div class="rightmenu">
				<ul>
					<li ><a id="menu2" style="margin-left: 145px;" href="student2_home.php">Home</a></li>
					<li><a id="menu2" href="student2_grades.php">Grades</a></li>
					<li><a id="menu2" href="student2_schedules.php">Schedules</a></li>
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
						<td><center><?php echo $PSWW2; ?></center></td>
						<td><center><?php echo $PSPT2; ?></center></td>
						<td><center><?php echo $PSQA2; ?></center></td>
						<td><center><?php echo round($SSTU1_GRADE); ?></center></td>
					</tr>
					<tr>
						<td><center>English</center></td>
						<td><center><?php echo $PEWW2; ?></center></td>
						<td><center><?php echo $PEPT2; ?></center></td>
						<td><center><?php echo $PEQA2; ?></center></td>
						<td><center><?php echo round($SSTU2_GRADE); ?></center></td>
					</tr>
					<tr>
						<td><center>Bible</center></td>
						<td><center><?php echo $PBWW2; ?></center></td>
						<td><center><?php echo $PBPT2; ?></center></td>
						<td><center><?php echo $PBQA2; ?></center></td>
						<td><center><?php echo round($SSTU3_GRADE); ?></center></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
</body>
</html>
