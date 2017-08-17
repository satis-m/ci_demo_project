 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'email';
$config['smtp_pass'] = 'password';
$config['mailtype'] = 'html';			//optional
$config['charset'] = 'iso-8859-1';		//optional
$config['wordwrap'] = TRUE;				//optional
 