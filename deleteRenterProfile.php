<?php 
$page_title = "Condo Renters";
include "header.php";
?>
   
    <h1>Remove Your Renter Information:</h1>

    <div class="row">
    <form action="delete_renter.php" method="POST" class="delete_renter">
        <fieldset>

    <h2>Please provide some basic renter identification information to remove yourself from Solmaris Condominium Group:</h2>
    <div class="row">
    <div class="col-md-4">
        <label for="RenterNum"> Renter Identification Number:</label>
            <input type ="text" placeholder="101" id="renterNum" name="renterNum"></input>
    </div>
    <div class="col-md-4">
        <label for="firstName"> First Name:</label>
            <input type ="text" placeholder="Bob" id="firstName" name="firstName"></input>
    </div>
    <div class="col-md-4">
        <label for="lastName">Last Name:</label>
            <input type ="text" placeholder="Smith" id="lastName" name="lastName"></input>
    </div>
    </div>   
    <div class="row">    
    <div class="col-md-offset-6 col-md-4"><input type ="submit" value="Submit">
    </div>
    </fieldset>
    </form>
    </container>

<?php 
include "footer.php";
?>