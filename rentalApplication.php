<?php 
$page_title = "Renter Application";
include "header.php";
?>
   
    <h1>Renter Information</h1>

    <div class="row">
    <form action="application.php" method="POST" class="rental_application">
        <fieldset>

    <h2>Please provide your personal information to rent with Solmaris:</h2>
    <div class="row">
    <div class="col-md-4">
        <label for="renterNum"> Renter Identification Number:</label>
            <input type ="text" placeholder="101" id="renterNum" name="renterNum"></input>
    </div>
    <div class="col-md-4">
        <label for="firstName"> First Name:</label>
            <input type ="text" placeholder="Bob" id="firstName" name="firstName"></input>
    </div>
    <div class="col-md-4">
        <label for="middleInit">Middle Initial:</label>
            <input type ="text" placeholder="F" id="middleInit" name="middleInit"></input>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        <label for="lastName">Last Name:</label>
            <input type ="text" placeholder="Smith" id="lastName" name="lastName"></input>
    </div>       
    <div class="col-md-4">
        <label for="address">Address:</label>
            <input type ="text" placeholder="123 Street" id="address" name="address"></input>
    </div>
    <div class="col-md-4">
        <label for="city">City:</label>
            <input type ="text" placeholder="Somewhere" id="city" name="city"></input>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        <label for="state">State:</label>
            <input type ="text" placeholder="BC" id="state" name="state"></input>
    </div>
    <div class="col-md-4">
        <label for="postal">Postal Code:</label>
            <input type ="text" placeholder="V4N 2T4" id="postal" name="postal"></input>
    </div>
    <div class="col-md-4">
        <label for="renter_email">Email:</label>
            <input type ="email" placeholder="bobSmith@gmail.com" id="renter_email" name="renter_email"></input>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        <label for="postal">Phone Number:</label>
            <input type ="tel" placeholder="250-555-5555" id="renter_phone" name="renter_phone"></input>
    </div>
    <div class="col-md-offset-2 col-md-4"><input type ="submit" value="Submit">
    </div>
    </fieldset>
    </form>
    </container>

<?php 
include "footer.php";
?>