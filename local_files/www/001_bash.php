<?php

# test connection to DB using shell_exec
echo '<pre>';
$output = shell_exec('pwd');

echo $output;


# sqlite test
$sqlitereturn = shell_exec('sqlite3 /crawler_dbs/test01.db "
select * from jobs;
"');

echo $sqlitereturn;

echo '</pre>';


?>
