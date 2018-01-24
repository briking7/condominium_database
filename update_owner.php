<?php 
$page_title = "Condo Owners";
include "header.php";

// access $mySQLi holding DB connection to remote database
require_once("dbConnection.php");

// retrieve form inputs from condoOwners.php form, validate, clean input
// extract user input

$ownerNum = $mySQLi->real_escape_string(trim($_POST["ownerNum"]));
$newOwnerFirst = $mySQLi->real_escape_string(trim($_POST["ofirstName"]));
$newOwnerLast = $mySQLi->real_escape_string(trim($_POST["olastName"]));
$newOwnerAddress = $mySQLi->real_escape_string(trim($_POST["oaddress"]));
$newOwnerCity = $mySQLi->real_escape_string(trim($_POST["ocity"]));
$newOwnerState = $mySQLi->real_escape_string(trim($_POST["ostate"]));
$newOwnerPostal = $mySQLi->real_escape_string(trim($_POST["opostal"]));

// testing purposes
// foreach($_POST as $key => $value)
// {
//     print $key . " values are: " . $value . "<br>";
// };

// Test if form entries have been filled correctly

if(empty($ownerNum) OR !is_numeric($ownerNum)) {
    echo "<h3>Please provide your owner identification number.</h3>"; 
}
elseif (!is_string($newOwnerFirst) OR is_numeric($newOwnerFirst)
        OR !is_string($newOwnerLast) OR is_numeric($newOwnerLast)
        OR !is_string($newOwnerAddress) OR is_numeric($newOwnerAddress)
        OR !is_string($newOwnerCity) OR is_numeric($newOwnerCity)
        OR !is_string($newOwnerState) OR is_numeric($newOwnerState)
        OR !is_string($newOwnerPostal) OR is_numeric($newOwnerPostal)) {
        echo "<h3>Please provide correct and valid input.</h3>";
}
else {

// SQL statement
// make SQL statment

$query = "UPDATE CondoOwner 
SET FirstName = '$newOwnerFirst', LastName = '$newOwnerLast', Address = '$newOwnerAddress', 
City = '$newOwnerCity', State = '$newOwnerState', PostalCode = '$newOwnerPostal'
WHERE OwnerNum = '$ownerNum'";

// testing purposes
// print "The query is: " . $query . " .";

if($mySQLi->query($query)) {
    if($mySQLi->affected_rows >= 1){
        echo "<h1>Your personal information has been updated. Thank you!</h1>";

        // run SQL statement against connection
        $mySQLi->query($query);
        
    }
    elseif (1452 == $mySQLi->errno) {
        echo "<h3>The owner identification number you entered does not exist. Please try again. Thank you.</h3>";
    }

    elseif ($mySQLi->error) {
        echo "<h3>There seems to be an error, according to the message that says " . $mySQLi->error . 
        ". Please try again, or contact Solmaris directly. Thank you!</h3>";
        }
    else {
        print "<h2>We're sorry. Your personal information was not entered because of technical 
        difficulties. Please try again, or contact Solmaris directly for further assistance. 
        Thank you. </h2>";
    }
}

//close DB connection

$mySQLi->close();
}

include "footer.php";
?>