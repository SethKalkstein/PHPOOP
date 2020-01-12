<?php 

//connect to database $db
require('db_connect.php');
require('objects.php');

/* 
//form query
$person_query = "insert into person (name, phone, email) values ('Someone', '123-345-345', 'sdf@sdfkj.cpm')";

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
 */

$someone = new Person("Me", "123-3245-344", "me@me.com");

echo $someone->getName();

?>

<html>
    <form action="add_person.php" method="POST">
        <label>Name: </label>
		<input type="text" name="personName" value="<?php echo htmlspecialchars($personName); ?>">
		
		<label>Phone: </label>
		<input type="text" name="personPhone" value="<?php echo htmlspecialchars($personPhone); ?>">

		<label>Email</label>
		<input type="text" name="personEmail" value="<?php echo htmlspecialchars($personEmail); ?>">

		<input type="submit" name="submit" value="submit">
    </form>
</html>