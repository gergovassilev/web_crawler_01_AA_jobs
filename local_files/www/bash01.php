<?php

echo '<pre>';
$output = shell_exec('pwd');

echo $output;


# sqlite test
$sqlitereturn = shell_exec('sqlite3 test01.db "
select * from jobs;
"');

echo $sqlitereturn;

echo '</pre>';


?>
