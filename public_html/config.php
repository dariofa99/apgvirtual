<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'db6ulom8fkpgeu';
$CFG->dbuser    = 'uxylumll4czgg';
$CFG->dbpass    = 'X171#32s2k++';
$CFG->prefix    = 'cmp_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_bin',
);

$CFG->wwwroot   = 'https://campusvirtual.fundacionapg.org';
$CFG->dataroot  = '/home/customer/www/campusvirtual.fundacionapg.org/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
