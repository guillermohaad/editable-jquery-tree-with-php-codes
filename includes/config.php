<?php
/**************************************
 *   File Name: config.php
 *   Begin: Thursday, June, 06, 2006
 *   Author: Ahmet Oguz Mermerkaya 	
 *   Email: ahmetmermerkaya@hotmail.com
 ***************************************/ 

if (!defined("IN_PHP"))
{
	die();
}

// database host
$dbHost = "localhost";   
// database user name
$dbUsername = "root";
// password to connect to database
$dbPassword = "BlindS";
// database name
$dbName = "php";

define ("TREE_TABLE_PREFIX", "tree");

/** target platform types
 *  this script runs both database and file system 
 *  database platform only supports mysql
 */
define ("DATABASE_PLATFORM", 0); // Don't edit
define ("FILE_SYSTEM_PLATFORM", 1); // Don't edit

define ("FAILED", "-1");  // Don't edit
define ("SUCCESS", "1");  // Don't edit


// choose target platform according to your needs 
// it may be DB_PLATFORM or FILE_SYSTEM_PLATFORM
define ("TARGET_PLATFORM", DATABASE_PLATFORM);

// if you want to run it in demo mode, enable the macro below
// if this macro is enabled, it runs in demo mode regardsless of whatever TARGET_PLATFORM is
//define("DEMO_MODE", true);



error_reporting(0);

?>