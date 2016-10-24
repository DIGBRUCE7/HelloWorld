<?php
/**
 * Created by PhpStorm.
 * User: 0705281
 * Date: 24/10/2016
 * Time: 14:08
 */

session_start();
$accesslevel = $_COOKIE[access_level_cookie];

displayAccessLevelInformation($accessLevel);

function displayAccessLevelInformation($accessLevel)
{
    if ($accessLevel == "standarduser") {
        echo "<p style = \"background-colour:lightgreen\">You are currently logged in as a standard user</p>";

    }

    elseif ($accessLevel == "root") {
        echo "<p<p style = \"background-color:red\">You are currently logged in as a root user</p>";
        echo "<p<p style = \"background-color:red\">You now have access to additional administrative feautures</p>";

    }
}