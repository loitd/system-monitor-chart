<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

/* VMS */
/*
$active_group = "vms";
$active_record = TRUE;
$vmstnsname = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.212.11)(PORT = 1521))
            (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = DATA06)))';

$db['vms']['hostname'] = $vmstnsname;
$db['vms']['username'] = "REPORTER_VMS";
$db['vms']['password'] = "Usd123456";
$db['vms']['database'] = "DATA06";
$db['vms']['dbdriver'] = "oci8";
$db['vms']['dbprefix'] = "";
$db['vms']['pconnect'] = TRUE;
$db['vms']['db_debug'] = TRUE;
$db['vms']['cache_on'] = FALSE;
$db['vms']['cachedir'] = "";
$db['vms']['char_set'] = "utf8";
$db['vms']['dbcollat'] = "utf8_general_ci";
$db['vms']['swap_pre'] = '';
$db['vms']['autoinit'] = TRUE;
$db['vms']['stricton'] = FALSE;
*/

/*Default*/
$active_group = 'default';
$active_record = TRUE;
/*
$tnsname = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.212.11)(PORT = 1521))
            (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = DATA06)))';
*/

/*$tnsname = '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.0.11)(PORT = 1521))
            (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = DB60)))';
*/

$tnsname = '(DESCRIPTION=(ADDRESS_LIST=(FAILOVER=on)(LOAD_BALANCE=on)(SOURCE_ROUTE=off)(ADDRESS=(PROTOCOL=TCP)(HOST=192.168.0.103)(PORT=1521))(ADDRESS=(PROTOCOL=TCP)(HOST=192.168.0.104)(PORT=1521)))(CONNECT_DATA=(SERVER=dedicated)(SERVICE_NAME=OFFICE)))';

$db['default']['hostname'] = $tnsname;
//$db['default']['username'] = 'REPORTER';
$db['default']['username'] = 'CDV_CHOTCUOC';
$db['default']['password'] = 'Cdv123$$$';
$db['default']['database'] = 'OFFICE';
$db['default']['dbdriver'] = 'oci8';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */