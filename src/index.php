<?php
// echo phpinfo();

/*$servername = "mariadb";
$database = "calendar";
$username = "root";
$password = "1a";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";*/

$sqlInsertSurvey = "ALTER TABLE `survey_%s` ADD `Q_%s` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL AFTER `%s`";
$sqlInsertTempSurvey = "ALTER TABLE `temp_survey_%s` ADD `Q_%s` TEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL AFTER `%s`";

echo sprintf($sqlInsertSurvey, 5, 66, 77);

