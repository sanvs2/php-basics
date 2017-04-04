$active_group = 'write';
$active_record = TRUE;

$db['read']['hostname'] = 'localhost';
$db['read']['username'] = 'root';
$db['read']['password'] = '';
$db['read']['database'] = 'read_database_name';
$db['read']['dbdriver'] = 'mysql';
$db['read']['dbprefix'] = '';
$db['read']['pconnect'] = TRUE;
$db['read']['db_debug'] = FALSE;
$db['read']['cache_on'] = FALSE;
$db['read']['cachedir'] = '';
$db['read']['char_set'] = 'utf8';
$db['read']['dbcollat'] = 'utf8_general_ci';

$db['write']['hostname'] = 'localhost';
$db['write']['username'] = 'root';
$db['write']['password'] = '';
$db['write']['database'] = 'write_database_name';
$db['write']['dbdriver'] = 'mysql';
$db['write']['dbprefix'] = '';
$db['write']['pconnect'] = TRUE;
$db['write']['db_debug'] = FALSE;
$db['write']['cache_on'] = FALSE;
$db['write']['cachedir'] = '';
$db['write']['char_set'] = 'utf8';
$db['write']['dbcollat'] = 'utf8_general_ci';
