<?php

# Database cleanup, because testing DB gets full of test entries and finding specific entries is not convenient anymore
# http://127.0.0.1:8080/005_cleanup_database.php

# if the unique IDs have to be reset, then the table has to be dropped and recreated.
# this example just clears the data

// Get the parameters from $_GET
$name = $_GET['name'] ?? 'Gast';
$age  = $_GET['age'] ?? 'unbekannt';

// DO NOT use htmlspecialchars here. Instead, escape single quotes 
// so they don't prematurely close the SQL string literals.
$safe_name = addslashes($name);
$safe_age  = addslashes($age);

# debug output
echo "Preparing to delete the database entries <br>";


//  Build the SQL statement
$sql = "DELETE FROM jobs;";


// Add 2>&1 to capture the exact error message from SQLite
$sqlitereturn = shell_exec("sqlite3 /crawler_dbs/test01.db " . escapeshellarg($sql) . " 2>&1");

if ($sqlitereturn !== null) {
    echo "SQLite Output/Error: " . $sqlitereturn;
}

echo "Database entries were deleted";


?>