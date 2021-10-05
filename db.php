<?php
$con = new mysqli("localhost","root","","oyester");
if ($con->connect_error)
{
  die("Connection failed: " . $con->connect_error);
}
?>