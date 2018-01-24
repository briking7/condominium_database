<div class="row rental_units_table">

<?php 
// access $mySQLi holding DB connection to remote database
require_once("dbConnection.php");

// retrieve available rental unit data from RentalCondoUnit table and Rental Agreement in DB
$query = "SELECT LocationName, CondoLocation.City, CondoLocation.State, MaxPersons, RentalRate, EndDate AS AvailableDate
FROM CondoLocation, CondoUnit, RentalCondoUnit, RentalAgreement
WHERE CondoLocation.LocationNum=CondoUnit.LocationNum 
AND CondoUnit.UnitID=RentalAgreement.UnitID 
AND RentalAgreement.UnitID=RentalCondoUnit.UnitID;";

// run SQL query
$condoLocationResults = $mySQLi->query($query);

// display in table format for viewer

print "<table class='table'>";
print "<thead class='thead-light'><tr><th>Location Name</th>" .
"<th>City</th>" .
"<th>Province</th>" . 
"<th>Capacity of Persons</th>" . 
"<th>Weekly Rental Rate</th>" . 
"<th>Date Available For Rent</th></tr></thead>";

while ($row = $condoLocationResults->fetch_array(MYSQLI_ASSOC)) {
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