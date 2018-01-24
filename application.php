<?php 
$page_title = "Renter Application";
include "header.php";

// access $mySQLi holding DB connection to remote database
require_once("dbConnection.php");

// retrieve form inputs from rentalApplication.php form, validate, clean input

// extract user input
$renterNum = $mySQLi->real_escape_string(trim($_POST['renterNum']));
$renterFirst = $mySQLi->real_escape_string(trim($_POST['firstName']));
$renterLast = $mySQLi->real_escape_string(trim($_POST["lastName"]));
$renterInit = $mySQLi->real_escape_string(trim($_POST["middleInit"]));
$renterAddress = $mySQLi->real_escape_string(trim($_POST["address"]));
$renterCity = $mySQLi->real_escape_string(trim($_POST["city"]));
$renterState = $mySQLi->real_escape_string(trim($_POST["state"]));
$renterPostal = $mySQLi->real_escape_string(trim($_POST["postal"]));
$renterEmail = $mySQLi->real_escape_string(trim($_POST["renter_email"]));
$renterPhoneNum = $mySQLi->real_escape_string(trim($_POST["renter_phone"]));

// Test for form completion
if(empty($renterNum)) {
    echo "<p>Please provide a unique renter identification number.</p>"; 
}
elseif(empty($renterFirst)) {
    echo "<p>Please fill in your first name. </p>"; 
}
elseif (empty($renterLast)) {
    echo "<p>Please fill in your last name. </p>"; 
} 
elseif (empty($renterInit)) {
    echo "<p>Please fill in your middle initial. </p>"; 
} 
elseif (empty($renterAddress)) {
    echo "<p>Please fill in your address. </p>"; 
}
elseif (empty($renterCity)) {
    echo "<p>Please fill in the city you live in. </p>"; 
}
elseif (empty($renterState)) {
    echo "<p>Please fill in the state you live in. </p>"; 
}
elseif (empty($renterPostal)) {
    echo "<p>Please fill in your postal code. </p>"; 
}
elseif (empty($renterPhoneNum)) {
    echo "<p>Please fill in your phone number. </p>"; 
}
elseif (empty($renterEmail)) {
    echo "<p>Please fill in your full email. </p>"; 
}
elseif (is_numeric($renterNum) AND !is_numeric($renterFirst) AND !is_numeric($renterLast) AND !is_numeric($renterInit)
AND !is_numeric($renterAddress) AND !is_numeric($renterCity) AND !is_numeric($renterState) AND !is_numeric($renterPostal)
AND is_numeric($renterPhoneNum) AND strpbrk($renterEmail, '@') AND !is_numeric($renterEmail)) {

// successful form entry by user
// enter user input into remote DB

// make SQL statement
$query = "INSERT INTO Renter(RenterNum, LastName, FirstName, MiddleInit, Address, City, 
State, PostalCode, PhoneNum, Email) 
VALUES('$renterNum', '$renterLast', '$renterFirst', '$renterInit', '$renterAddress', '$renterCity', '$renterState', 
'$renterPostal', '$renterPhoneNum', '$renterEmail')";

// for testing purposes
// print "The query is: " . $query . " .";

    if($mySQLi->query($query)) {
        print "<h1>Thank you! Your personal information has been submitted. 
        We will be in touch with you shortly to continue your rental application with Solmaris.</h1>";
        
        // insert query into DB
        $mySQLi->query($query);
        exit;
    }
    elseif (1062 == $mySQLi->errno) {
            print "<h2>The renter number you entered is in use. 
            Please choose another renter identification number. Thank you. </h2>";
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
else {
    print "<h2>We're sorry. Your personal information was not entered because of technical 
    difficulties. Please try again, or contact Solmaris directly for further assistance. 
    Thank you. </h2>";
    }

//close DB connection

$mySQLi->close();

include "footer.php";
?>