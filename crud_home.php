<?php 
//connect to database $db
require('db_connect.php');
//form query
$person_query = "select * from person";

//use a prepared statement to execute the query
// create a PDOStatement object
$person_statement = $db->prepare($person_query);
# Execute the query
$person_statement->execute();
# Return an array containing the query results
$people = $person_statement->fetchAll(PDO::FETCH_ASSOC );
# Allows new SQL statements to execute
$person_statement->closeCursor();

echo var_dump($people);

echo "<br>";

foreach($people as $person){
    echo "<br>--------<br>";
    foreach($person as $attrib => $recordValue){
        echo "<br>column {$attrib} has a value of {$recordValue}.<br>";
    }
    echo "<br>--------<br>";
}
?>
