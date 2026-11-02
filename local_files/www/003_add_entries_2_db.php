<?php

# example
# http://127.0.0.1:8080/003_add_entries_2_db.php?name=gergo33
# http://127.0.0.1:8080/004_ajax_add_2_db.html


// Get the parameters from $_GET
$name = $_GET['name'] ?? 'Gast';
$age  = $_GET['age'] ?? 'unbekannt';

// DO NOT use htmlspecialchars here. Instead, escape single quotes 
// so they don't prematurely close the SQL string literals.
$safe_name = addslashes($name);
$safe_age  = addslashes($age);

# debug output
echo "adding $safe_name to the database";


//  Build the SQL statement
$sql = "INSERT INTO jobs (company, title, location, first_seen) VALUES ('$safe_name', '$safe_name', '$safe_age', DATE('now'));";





// Add 2>&1 to capture the exact error message from SQLite
$sqlitereturn = shell_exec("sqlite3 /crawler_dbs/test01.db " . escapeshellarg($sql) . " 2>&1");

if ($sqlitereturn !== null) {
    echo "SQLite Output/Error: " . $sqlitereturn;
}


?>