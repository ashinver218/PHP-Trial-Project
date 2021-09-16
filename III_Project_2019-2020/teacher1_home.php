<!DOCTYPE html>
<?php
$myFile1 = "teacher1_grades.txt";
$science1 = file($myFile1);
$name_in = "students_name.txt";
$Sname = file($name_in);
$name1 = $Sname[0];
$name2 = $Sname[1];
$name3 = $Sname[2];
$name4 = $Sname[3];
$name5 = $Sname[4];
$PSWW1 = $science1[0];
$PSPT1 = $science1[1];
$PSQA1 = $science1[2];
$PSWW2 = $science1[4];
$PSPT2 = $science1[5];
$PSQA2 = $science1[6];
$PSWW3 = $science1[8];
$PSPT3 = $science1[9];
$PSQA3 = $science1[10];
$PSWW4 = $science1[12];
$PSPT4 = $science1[13];
$PSQA4 = $science1[14];
$PSWW5 = $science1[16];
$PSPT5 = $science1[17];
$PSQA5 = $science1[18];
$SSTU1_GRADE = $science1[3];
$SSTU2_GRADE = $science1[7];
$SSTU3_GRADE = $science1[11];
$SSTU4_GRADE = $science1[15];
$SSTU5_GRADE = $science1[19];
 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_teachers.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">

			<div class="leftmenu">
        <ul>
					<li> Shiela Seco </li>
          <li> Science Teacher</li>
        </ul>
			</div>

			<div class="rightmenu">
				<ul>
					<li ><a id="menu2" style="margin-left: 145px;" href="teacher1_home.php">Home</a></li>
					<li><a id="menu2" href="teacher1_grades.php">Grades</a></li>
					<li><a id="menu2" href="teacher1_schedules.php">Schedules</a></li>
					<li> <a id="menu2" href="login.php">LogOut</a></li>
				</ul>
			</div>
			<div class="grades_table">
				<table>
					<thead>
					<tr>
						<th><center>Students</center></th>
						<th><center>Written Works</center></th>
						<th><center>Performance Task</center></th>
						<th><center>Quarterly Assesment</center></th>
						<th><center>Total</center></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td><center><?php echo "$name1"; ?></center></td>
						<?php echo "<td><center> $PSWW1 </center></td>"; ?>
						<?php echo "<td><center> $PSPT1 </center></td>"; ?>
						<?php echo "<td><center> $PSQA1 </center></td>"; ?>
						<?php echo "<td><center> $SSTU1_GRADE </center></td>"; ?>
					</tr>
					<tr>
						<td><center><?php echo "$name2"; ?></center></td>
						<?php echo "<td><center> $PSWW2 </center></td>"; ?>
						<?php echo "<td><center> $PSPT2 </center></td>"; ?>
						<?php echo "<td><center> $PSQA2 </center></td>"; ?>
						<?php echo "<td><center> $SSTU2_GRADE </center></td>"; ?>
					</tr>
					<tr>
						<td><center><?php echo "$name3"; ?></center></td>
						<?php echo "<td><center> $PSWW3 </center></td>"; ?>
						<?php echo "<td><center> $PSPT3 </center></td>"; ?>
						<?php echo "<td><center> $PSQA3 </center></td>"; ?>
						<?php echo "<td><center> $SSTU3_GRADE </center></td>"; ?>
					</tr>
          <tr>
            <td><center><?php echo "$name4"; ?></center></td>
            <?php echo "<td><center> $PSWW4 </center></td>"; ?>
            <?php echo "<td><center> $PSPT4 </center></td>"; ?>
            <?php echo "<td><center> $PSQA4 </center></td>"; ?>
            <?php echo "<td><center> $SSTU4_GRADE </center></td>"; ?>
          </tr>
          <tr>
            <td><center><?php echo "$name5"; ?></center></td>
            <?php echo "<td><center> $PSWW5 </center></td>"; ?>
            <?php echo "<td><center> $PSPT5 </center></td>"; ?>
            <?php echo "<td><center> $PSQA5 </center></td>"; ?>
            <?php echo "<td><center> $SSTU5_GRADE </center></td>"; ?>
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
