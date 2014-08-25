<?php 
session_start();
if($_SESSION['login']!=1)
	header("Location: login.php");

header("content-type:text/html;charset=utf-8");
$data=file_get_contents("data.json");
echo '<form method="post">';
echo '<textarea rows="30" cols="100" name="data" id="data">';
echo $data;
echo "</textarea>";	
echo '<input type="submit" value="save">';
echo "</form>";

echo 'Picture Update';

echo '<br>info1';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="info1">';
echo '<input type="submit" value="send">';
echo "</form>";

echo '<br>info2';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="info2">';
echo '<input type="submit" value="send">';
echo "</form>";

echo '<br>teacher';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="teacher">';
echo '<input type="submit" value="send">';
echo "</form>";

echo '<br>leader';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="leader">';
echo '<input type="submit" value="send">';
echo "</form>";

echo '<br>vleader';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="vleader">';
echo '<input type="submit" value="send">';
echo "</form>";

echo '<br>general';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="general">';
echo '<input type="submit" value="send">';
echo "</form>";

echo '<br>device';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="device">';
echo '<input type="submit" value="send">';
echo "</form>";

echo '<br>instruments';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="instruments">';
echo '<input type="submit" value="send">';
echo "</form>";

echo '<br>PR';
echo '<form action="picupdate.php" method="post" enctype="multipart/form-data">';
echo '<input type="file" name="PR">';
echo '<input type="submit" value="send">';
echo "</form>";

$databak=file_get_contents("data.json.bak");
echo 'backup';
echo '<textarea rows="30" cols="100" name="data" id="data">';
echo $data;
echo "</textarea>";

if($_POST['data']){
	file_put_contents("data.json", stripslashes($_POST['data']));
	header("Location: admin.php");
}
?>