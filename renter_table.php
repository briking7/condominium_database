<div class="row renter_table">

<?php 
// access $mySQLi holding DB connection to remote database
require_once("dbConnection.php");

// retrieve available rental unit data from RentalCondoUnit table and Rental Agreement in DB
$query = "SELECT RenterNum, FirstName, LastName
FROM Renter;";

// run SQL query
$renterResults = $mySQLi->query($query);

// display in table format for viewer

print "<table class='table'>";
print "<thead class='thead-light'><tr><th>Renter Number</th>" .
"<th>Renter First Name</th>" .
"<th>Renter Last Name</th>" . 
"</tr></thead>";

while ($row = $renterResults->fetch_array(MYSQLI_ASSOC)) {
    // print_r($row);

    print "<tr>";
    foreach($row as $key=>$value){
        print "<td> $value </td>";
    }
    print "</tr>";
}
print "</table>";

// print "</tr>";

// print "<tr><td>" . $firstName . "</td><td>" . $lastName . "</td>";
// print "</tr>";

//close DB connection

$mySQLi->close();

?>

</div>