<?php 

//connect to database $db
require('db_connect.php');
//form query
$person_query = "";

//use a prepared statement to execute the query
// create a PDOStatement object
$person_statement = $db->prepare($person_query);
# Execute the query
$is_it_a_succuss = $person_statement->execute();

$person_statement->closeCursor();

if ($is_it_a_succuss){
    echo "It worked";
} else {
    echo "It didn't work";
}

?>