<?php
$con =  new mysqli("172.31.18.121","brijesh","redhat","dm");
if($con->connect_error)
{
   echo $con->connect_error;
   exit;
}
?>