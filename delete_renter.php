<?php 
$page_title = "Condo Renters";
include "header.php";

// access $mySQLi holding DB connection to remote database
require_once("dbConnection.php");

// retrieve form inputs from rentalApplication.php form, validate, clean input
$deleteRenterNum = $mySQLi->real_escape_string(trim($_POST["renterNum"]));
$firstName = $mySQLi->real_escape_string(trim($_POST["firstName"]));
$lastName = $mySQLi->real_escape_string(trim($_POST["lastName"]));

// testing purposes
// print $deleteRenterNum . ", " . $firstName . ", " . $lastName;

if (empty($deleteRenterNum) OR empty($firstName) OR empty($lastName)) {
    echo "<h3>Please provide your renter identification number and first and last name. Thank you.</h3>"; 
   
} 
elseif (is_numeric($deleteRenterNum) AND !is_numeric($firstName) and !is_numeric($lastName)) {
    // if user inputs are validated and return TRUE, query is implemented
    
    // make SQL query to delete Renter from DB
    $query = "DELETE from Renter WHERE RenterNum = '$deleteRenterNum';";

        if ($mySQLi->query($query)) {
            // run query
            $mySQLi->query($query);
            print "<h1>Thank you! Your personal information has been deleted from the 
            Solmaris Condominium Group records.</h1>";
            
        }
        elseif (1452 == $mySQLi->errno) {
            print "<h2>The renter number you entered does not exist. 
            Please try your correct renter identification number again. Thank you. </h2>";
        }

        else {
                print "<h2>We're sorry. Your personal information was not entered because of technical 
                difficulties. Please try again, or contact Solmaris directly for further assistance. 
                Thank you. </h2>";
            }  
    }
else {
    echo "<h3>There seems to be an error. Please provide your numeric renter identification number 
    and first and last name as per our records. Thank you.</h3>"; 
    
}

//close DB connection

$mySQLi->close();

include "footer.php";
?>