<?php

$SETTINGS["mysql_user"]='root';
$SETTINGS["mysql_pass"]='';
$SETTINGS["hostname"]='localhost';
$SETTINGS["mysql_database"]='project_db';
$SETTINGS["data_table"]='mysql_table_search';


$mysqli = new mysqli($SETTINGS["hostname"], $SETTINGS["mysql_user"], $SETTINGS["mysql_pass"],$SETTINGS["mysql_database"]);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>