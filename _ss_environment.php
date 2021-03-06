<?php 
define('SS_ENVIRONMENT_TYPE', 'dev');

/* Database connection */
$db = getenv('DB');
switch($db) {
case "PGSQL";
	define('SS_DATABASE_CLASS', 'PostgreSQLDatabase');
	define('SS_DATABASE_USERNAME', 'postgres'); 
	define('SS_DATABASE_PASSWORD', '');
	break;

case "SQLITE":
	define('SS_DATABASE_CLASS', 'SQLitePDODatabase');
	define('SS_DATABASE_USERNAME', 'root'); 
	define('SS_DATABASE_PASSWORD', '');
	break;

default:
	define('SS_DATABASE_CLASS', 'MySQLDatabase');
	define('SS_DATABASE_USERNAME', 'root'); 
	define('SS_DATABASE_PASSWORD', '');

}

define('SS_DATABASE_SERVER', 'localhost'); 
define('SS_DATABASE_CHOOSE_NAME', true);


/* Configure a default username and password to access the CMS on all sites in this environment. */ 
define('SS_DEFAULT_ADMIN_USERNAME', 'username'); 
define('SS_DEFAULT_ADMIN_PASSWORD', 'password');

$_FILE_TO_URL_MAPPING[dirname(__FILE__)] = 'http://localhost:8000';
