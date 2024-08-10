<?php
unset($CFG);  // Ignore this line
global $CFG;  // This is necessary here for PHPUnit execution
$CFG = new stdClass();

$CFG->dbtype = 'mysqli';      // 'pgsql', 'mariadb', 'mysqli', 'auroramysql', 'sqlsrv' or 'oci'
$CFG->dblibrary = 'native';     // 'native' only at the moment
$CFG->dbhost = 'localhost';  // eg 'localhost' or 'db.isp.com' or IP
$CFG->dbname = 'qvastcms';     // database name, eg moodle
$CFG->dbuser = 'root';   // your database username
$CFG->dbpass = '';   // your database password
$CFG->prefix = 'mdl_';       // prefix to use for all table names
$CFG->dboptions = array(
  'dbpersist' => false,
  'dbsocket' => false,
  'dbport' => '3306',
  'dbhandlesoptions' => false,
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot = 'http://localhost/moodle';
$CFG->dataroot = 'C:\\wamp64\\moodledata';
$CFG->directorypermissions = 02777;
$CFG->admin = 'admin';


require_once (__DIR__ . '/lib/setup.php');// Do not edit

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!