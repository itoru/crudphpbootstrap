<?php
define('server', 'localhost');
define('username', 'root');
define('password', '');
define('database', 'crud');

mysql_connect(server,username,password) or die(mysql_error());
mysql_select_db(database) or die(mysql_error());




?>