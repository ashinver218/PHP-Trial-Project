<!DOCTYPE html>
<?php
$name_in = "students_name.txt";
$Sname = file($name_in);
$name1 = $Sname[0];
$name2 = $Sname[1];
$name3 = $Sname[2];
$name4 = $Sname[3];
$name5 = $Sname[4];
 ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style_teachers_grades.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
	<?php
	$SSTU1_GRADE = 0;
	$SSTU2_GRADE = 0;
	$SSTU3_GRADE = 0;
	$SSTU4_GRADE = 0;
	$SSTU5_GRADE = 0;
	if (isset($_POST['PSWW1']) && isset($_POST['PSPT1']) && isset($_POST['PSQA1']) && isset($_POST['PSWW2']) && isset($_POST['PSPT2']) && isset($_POST['PSQA2']) && isset($_POST['PSWW3']) && isset($_POST['PSPT3']) && isset($_POST['PSQA3']) && isset($_POST['PSWW4']) && isset($_POST['PSPT4']) && isset($_POST['PSQA4']) && isset($_POST['PSWW5']) && isset($_POST['PSPT5']) && isset($_POST['PSQA5'])){
	if (($_POST["PSWW1"] == '') || ($_POST["PSPT1"] == '') || ($_POST["PSQA1"] == '') || ($_POST["PSWW2"] == '') || ($_POST["PSPT2"] == '') || ($_POST["PSQA2"] == '') || ($_POST["PSWW3"] == '') || ($_POST["PSPT3"] == '') || ($_POST["PSQA3"] == '') || ($_POST["PSWW4"] == '') || ($_POST["PSPT4"] == '') || ($_POST["PSQA4"] == '') || ($_POST["PSWW5"] == '') || ($_POST["PSPT5"] == '') || ($_POST["PSQA5"] == '')) {
	$SSTU1_GRADE = 0;
	$SSTU2_GRADE = 0;
	$SSTU3_GRADE = 0;
	$SSTU4_GRADE = 0;
	$SSTU5_GRADE = 0;
} else {
	$null = array();
	$PSWW1 = $_POST['PSWW1'];
	$PSPT1 = $_POST['PSPT1'];
	$PSQA1 = $_POST['PSQA1'];
	$PSWW2 = $_POST['PSWW2'];
	$PSPT2 = $_POST['PSPT2'];
	$PSQA2 = $_POST['PSQA2'];
	$PSWW3 = $_POST['PSWW3'];
	$PSPT3 = $_POST['PSPT3'];
	$PSQA3 = $_POST['PSQA3'];
	$PSWW4 = $_POST['PSWW4'];
	$PSPT4 = $_POST['PSPT4'];
	$PSQA4 = $_POST['PSQA4'];
	$PSWW5 = $_POST['PSWW5'];
	$PSPT5 = $_POST['PSPT5'];
	$PSQA5 = $_POST['PSQA5'];
	$SSTU1_GRADE = ($_POST["PSWW1"] + $_POST["PSWW1"] + $_POST["PSQA1"]) / 3;
	$SSTU2_GRADE = ($_POST["PSWW2"] + $_POST["PSPT2"] + $_POST["PSQA2"]) / 3;
	$SSTU3_GRADE = ($_POST["PSWW3"] + $_POST["PSPT3"] + $_POST["PSQA3"]) / 3;
	$SSTU4_GRADE = ($_POST["PSWW4"] + $_POST["PSPT4"] + $_POST["PSQA4"]) / 3;
	$SSTU5_GRADE = ($_POST["PSWW5"] + $_POST["PSPT5"] + $_POST["PSQA5"]) / 3;
	$file = "teacher3_grades.txt";
	$grades_array = array();
	$grades_array[0] =  "$PSWW1\n";
	$grades_array[1] =  "$PSPT1\n";
	$grades_array[2] =  "$PSQA1\n";
	$SSTU1_GRADE = round($SSTU1_GRADE);
	$grades_array[3] =  "$SSTU1_GRADE\n";
	$grades_array[4] =  "$PSWW2\n";
	$grades_array[5] =  "$PSPT2\n";
	$grades_array[6] =  "$PSQA2\n";
	$SSTU2_GRADE = round($SSTU2_GRADE);
	$grades_array[7] =  "$SSTU2_GRADE\n";
	$grades_array[8] =  "$PSWW3\n";
	$grades_array[9] =  "$PSPT3\n";
	$grades_array[10] =  "$PSQA3\n";
	$SSTU3_GRADE = round($SSTU3_GRADE);
	$grades_array[11] =  "$SSTU3_GRADE\n";
	$grades_array[12] =  "$PSWW4\n";
	$grades_array[13] =  "$PSPT4\n";
	$grades_array[14] =  "$PSQA4\n";
	$SSTU4_GRADE = round($SSTU4_GRADE);
	$grades_array[15] =  "$SSTU4_GRADE\n";
	$grades_array[16] =  "$PSWW5\n";
	$grades_array[17] =  "$PSPT5\n";
	$grades_array[18] =  "$PSQA5\n";
	$SSTU5_GRADE = round($SSTU5_GRADE);
	$grades_array[19] =  "$SSTU5_GRADE\n";
	file_put_contents($file, $null);
	file_put_contents($file , $grades_array);
}
}
	 ?>

	<div class="bgimage">
		<div class="menu">

			<div class="leftmenu">
        <ul>
					<li> Rodel Honorica </li>
          <li> Bible Teacher</li>
        </ul>
			</div>

			<div class="rightmenu">
				<ul>
					<li ><a id="menu2" style="margin-left: 145px;" href="teacher3_home.php">Home</a></li>
					<li><a id="menu2" href="teacher3_grades.php">Grades</a></li>
					<li><a id="menu2" href="teacher3_schedules.php">Schedules</a></li>
					<li> <a id="menu2" href="login.php">LogOut</a></li>
				</ul>
			</div>
			<div class="grades_table">
				<form id="teacher1_grades" method="post">
				<table>
					<thead>
					<tr>
						<th><center><h4 style="width: 200px;">Students Name</h4></center></th>
						<th><center>Written Works</center></th>
						<th><center>Performance Task</center></th>
				    <th><center>Quarterly Assesment</center></th>
						<th><center>Total</center></th>
					</tr>
					</thead>
					<tbody>
						<tr>
							<td><center><?php echo " $name1 "; ?></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSWW1"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSPT1"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSQA1"></center></td>
							<?php echo "<td><center> $SSTU1_GRADE </center></td>"; ?>
						</tr>
						<tr>
							<td><center><?php echo " $name2 "; ?></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSWW2"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSPT2"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSQA2"></center></td>
							<?php echo "<td><center> $SSTU2_GRADE </center></td>"; ?>
						</tr>
						<tr>
							<td><center><?php echo " $name3 "; ?></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSWW3"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSPT3"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSQA3"></center></td>
							<?php echo "<td><center> $SSTU3_GRADE </center></td>"; ?>
						</tr>
						<tr>
							<td><center><?php echo " $name4 "; ?></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSWW4"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSPT4"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSQA4"></center></td>
							<?php echo "<td><center> $SSTU4_GRADE </center></td>"; ?>
						</tr>
						<tr>
							<td><center><?php echo " $name5 "; ?></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSWW5"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSPT5"></center></td>
							<td><center><input style="width: 40px;" type="number" name="PSQA5"></center></td>
							<?php echo "<td><center> $SSTU5_GRADE </center></td>"; ?>
						</tr>
					</tbody>
				</table>
			</div>
			<input style="margin-left: 1055px; padding-left: 10px; padding-right: 12.5px;" type="submit" value="submit">
		</div>
				</form>
				<table>
					<thead>
					<tr>
						<th><center>Note</center></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1: Please make sure that each cell has a valid value else the data would not be updated.</td>
					</tr>
					<tr>
						<td>2: The previous data would be reset once you submit a new batch of data.</td>
					</tr>
				</tbody>
				</table>
</body>
</html>
