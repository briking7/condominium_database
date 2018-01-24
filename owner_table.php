<div class="row owner_table">

<?php 
// access $mySQLi holding DB connection to remote database
require_once("dbConnection.php");

// retrieve available rental unit data from RentalCondoUnit table and Rental Agreement in DB
$query = "SELECT OwnerNum, FirstName, LastName
FROM CondoOwner;";

// run SQL query
$ownerResults = $mySQLi->query($query);

// display in table format for viewer

print "<table class='table'>";
print "<thead class='thead-light'><tr><th>Owner Number</th>" .
"<th>Owner First Name</th>" .
"<th>Owner Last Name</th>" . 
"</tr></thead>";

while ($row = $ownerResults->fetch_array(MYSQLI_ASSOC)) {
    // print_r($row);

    print "<tr>";
    foreach($row as $key=>$value){
        print "<td> $value </td>";
    }
    print "</tr>";
}
print "</table>";

//close DB connection

$mySQLi->close();
?>

</div>