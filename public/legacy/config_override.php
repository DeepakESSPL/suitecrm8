<?php
/***CONFIGURATOR***/
$sugar_config['default_export_charset'] = 'ISO-8859-1';
$sugar_config['verify_client_ip'] = false;
$sugar_config['system_name'] = 'TableReadyCRM';
/***CONFIGURATOR***/

// Local development database configuration
// These settings override config.php for local development only
$sugar_config['dbconfig']['db_host_name'] = '127.0.0.1';
$sugar_config['dbconfig']['db_user_name'] = 'root';
$sugar_config['dbconfig']['db_password'] = 'deepak';
$sugar_config['dbconfig']['db_name'] = 'suitecrm8';
$sugar_config['dbconfig']['db_port'] = '3306';

// Local site URL
$sugar_config['site_url'] = 'http://suitecrm8.local';
$sugar_config['host_name'] = 'suitecrm8.local';