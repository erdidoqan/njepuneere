<?php

return array(
	'driver' => 'smtp',

	'host' => 'mail.njepuneere.com',

	'port' => 110,

	'from' => array('address' => 'info@njepuneere.com', 'name' => 'Erdi'),

	'encryption' => 'tls',

	'username' => 'info@njepuneere.com',

	'password' => '15241524',

	'sendmail' => '/usr/sbin/sendmail -bs',

	'pretend' => false,

);
