<?php

// This is the Login Configuration

if (isset($_POST['password']) && isset($_POST['username'])) {
  if ($_POST['username'] == "teacher1" && $_POST['password'] == "teacher1") {
  header('Location:teacher1_home.php');
}
  if ($_POST['username'] == "teacher2" && $_POST["password"] == "teacher2") {
  header('Location:teacher2_home.php');
}
  if ($_POST['username'] == "teacher3" && $_POST["password"] == "teacher3") {
  header('Location:teacher3_home.php');
}
  if ($_POST['username'] == "Dazzled3" && $_POST["password"] == "Acchon 1") {
  header('Location:student1_home.php');
}
  if ($_POST['username'] == "Dopeplenks" && $_POST["password"] == "127&8") {
  header('Location:student2_home.php');
}
  if ($_POST['username'] == "One Last Wish" && $_POST["password"] == "franlirag123") {
  header('Location:student3_home.php');
}
if ($_POST['username'] == "Bibots" && $_POST["password"] == "Hampleks") {
header('Location:student4_home.php');
}
if ($_POST['username'] == "Yael" && $_POST["password"] == "Hyojian<3") {
header('Location:student5_home.php');
}
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Our Website</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
  </head>
  <body style="background-color: ;">
    <div id="frm">
    <form action="login.php" method="post">
      <img id="asd" src="pictures1/laa.png"/>
      <h5 id="lip" ><center>   LIPA ADVENTIST ACADEMY</center></h5>
      <br>
      <br>
      <br>
      <br>
      <input type="text" id="user" placeholder="Username" name="username">
      <input type="password" id="pass" placeholder="Password" name="password">
      <br>
      <center><input type="submit" id="btn" value="Login"></center>
    </form>
    <?php
    if (isset($_POST["password"]) && $_POST["password"] != "h123bjb1379l") {
      echo "<h3><center>Invalid Input!</center></h3>";
    }
    ?>
  </div>
  </body>
</html>    











                                                                                                                                                                                           
<!-- Created by Robert Lois D. Omega -->
