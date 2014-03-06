<?php

// Encryption

$secrets['auth_key'] = 'changeme';
$secrets['secure_auth_key'] = 'changeme';
$secrets['logged_in_key'] = 'changeme';
$secrets['nonce_key'] = 'changeme';
$secrets['auth_salt'] = 'changeme';
$secrets['secure_auth_salt'] = 'changeme';
$secrets['logged_in_salt'] = 'changeme';
$secrets['nonce_salt'] = 'changeme';

switch ( ENVIRONMENT ){
	
	case "production":
		$secrets['database_host'] = '';
		$secrets['database_name'] = '';
		$secrets['database_user'] = '';
		$secrets['database_pass'] = '';
		break;
		
	case "staging":
		$secrets['database_host'] = '';
		$secrets['database_name'] = '';
		$secrets['database_user'] = '';
		$secrets['database_pass'] = '';
		break;
		
	case "development":
		$secrets['database_host'] = '';
		$secrets['database_name'] = '';
		$secrets['database_user'] = '';
		$secrets['database_pass'] = '';
		break;
	
}
