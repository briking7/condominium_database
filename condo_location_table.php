<div class="row condo_locations_table">

<?php 
// access $mySQLi holding DB connection to remote database
require_once("dbConnection.php");


// retrieve available rental unit data from RentalCondoUnit table and Rental Agreement in DB
$query = "SELECT LocationName, Address, City, State, PostalCode from CondoLocation;";
$condoLocationResults = $mySQLi->query($query);
$row = $condoLocationResults->fetch_array(MYSQLI_ASSOC);

// display in table format for viewer

print "<table class='table'>";
print "<thead class='thead-light'><tr><th>Location Name</th>" .
"<th>Location Address</th>" . 
"<th>City</th>" .
"<th>Province</th>" . 
"<th>Postal Code</th>" .  
"</tr></thead>";

while ( $row = $condoLocationResults->fetch_array(MYSQLI_ASSOC)) {
    //print_r($row);
    //the inner loop will show one record in a table row.

    // print "<tr>";
    
    // foreach($row as $key=>$value){
    //     print "<th>" . $key . "</th>";
    // }
    // print "</tr>";
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