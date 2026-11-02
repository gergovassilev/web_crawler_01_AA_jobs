<?php


//

if (!empty($_GET['company']) && !empty($_GET['title']) && !empty($_GET['city'])):

// Get the parameters from $_GET
$company   = $_GET['company']; 
$title     = $_GET['title'];
$city      = $_GET['city'];
$published = ($_GET['published'] ?? '') ?: date('Y-m-d H:i:s');




// $name = $_GET['name'] ?? 'Gast';
// $age  = $_GET['age'] ?? 'unbekannt';

// DO NOT use htmlspecialchars here. Instead, escape single quotes 
// so they don't prematurely close the SQL string literals.
//$safe_name = addslashes($name);
//$safe_age  = addslashes($age);
// to decide later which escaping and sanitizing approach will be more convenient
// sanitizing so it does not pass injections might alter the appearance to unreadable state (from human point of view)


$safe_company   = str_replace("'", "''",$company);    
$safe_title     = str_replace("'", "''",$title);
$safe_city      = str_replace("'", "''",$city);
$safe_published = str_replace("'", "''",$published); 


# debug output
echo "adding $safe_name to the database";


//  Build the SQL statement
$sql = "INSERT INTO jobs (company, title, location, first_seen) VALUES ('$safe_company', '$safe_title', '$safe_city', '$safe_published');";





// Add 2>&1 to capture the exact error message from SQLite
$sqlitereturn = shell_exec("sqlite3 /crawler_dbs/test01.db " . escapeshellarg($sql) . " 2>&1");

if ($sqlitereturn !== null) {
    echo "SQLite Output/Error: " . $sqlitereturn;
}


endif;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webform to add DB entries</title>
</head>
<body>
    

    <!-- Note the id on the form, which helps JS intercept the action -->
    <form id="myForm">
        <div class="form-group">
            <label for="firstName">Company:</label>
            <input type="text" id="company" name="company" placeholder="company name">
        </div>

        <div class="form-group">
            <label for="lastName">Title:</label>
            <input type="text" id="title" name="title" placeholder="it-supporter">
        </div>

        <div class="form-group">
            <label for="city">Location:</label>
            <input type="text" id="city" name="city" placeholder="Essen">
        </div>

        <div class="form-group">
            <label for="city">Published:</label>
            <input type="text" id="published" name="published" placeholder="25.07.2026">
        </div>
        <div class="form-group">
            <label for="city">Last seen:</label>
            <input type="text" id="last_seen" name="last_seen" placeholder="28.03.2026">
        </div>
        <!-- The button that triggers our action -->
        <button type="submit">Submit Form</button>
    </form>

    <script>
        // 1. Grab a reference to the form element
        const form = document.getElementById('myForm');

        // 2. Attach an event listener to catch the form submission
        form.addEventListener('submit', function(event) {
            
            // 3. CRITICAL: Stop the page from refreshing automatically
           // event.preventDefault();

            // 4. Call your custom JavaScript function
            processFormData();
        });

        // 5. Your custom function where the logic happens
        function processFormData() {
            // Retrieve values from the text inputs
            const first = document.getElementById('firstName').value;
            const last = document.getElementById('lastName').value;
            const city = document.getElementById('city').value;

            // Do something with the data (e.g., alert it, validate it, or log it)
            console.log("Form submitted successfully!");
            alert(`Hello ${first} ${last} from ${city}!`);
        }
    </script>




</body>
</html>