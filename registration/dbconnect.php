<?php
if(!mysql_connect("mysql.hostinger.in","u777194076_bob","dryday30"))
{
die('oops connection problem ! --> '.mysql_error());
}if(!mysql_select_db("u777194076_bob"))
{
die('oops database selection problem ! --> '.mysql_error());
}
?>