<?php
# test connection using the php sqlite module
# example
# http://127.0.0.1:8080/002_php2sqlite.php
echo '<pre>';
try {
    $pdo = new PDO('sqlite:/crawler_dbs/test01.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "successfuly connected to DB";


} catch (PDOException $e){
    echo "connection failed";
};


$stmt = $pdo->query("Select * from jobs");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $result){var_dump($result);};

echo "ressss --->   ".$results[3]['title']." <---- ieii \n \n";


echo '</pre>';
?>
