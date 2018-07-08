<?php
echo "1";
$connection = mysqli_connect('localhost', 'root', '');
echo "2";
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
echo "3";
$select_db = mysqli_select_db($connection, 'digidoc');
echo "4";
if (!$select_db){
	echo "5";
    die("Database Selection Failed" . mysqli_error($connection));
}