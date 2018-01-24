<?php 
$page_title = "Condo Owners";
include "header.php";
?>
   
    <h1>Update Owner Information</h1>

    <div class="row">
    <form action="update_owner.php" method="POST" class="update_owner">
        <fieldset>

    <h2>Please provide your personal information to update your profile with Solmaris:</h2>
    <div class="row">
    <div class="col-md-4">
        <label for="ownerNum"> Owner Identification Number:</label>
            <input type ="text" placeholder="101" id="ownerNum" name="ownerNum"></input>
    </div>
    <div class="col-md-4">
        <label for="ofirstName"> First Name:</label>
            <input type ="text" placeholder="Bob" id="ofirstName" name="ofirstName"></input>
    </div>
    <div class="col-md-4">
        <label for="olastName">Last Name:</label>
            <input type ="text" placeholder="Smith" id="olastName" name="olastName"></input>
    </div> 
    </div>
    <div class="row">      
    <div class="col-md-4">
        <label for="oaddress">Address:</label>
            <input type ="text" placeholder="123 Street" id="oaddress" name="oaddress"></input>
    </div>
    <div class="col-md-4">
        <label for="ocity">City:</label>
            <input type ="text" placeholder="Somewhere" id="ocity" name="ocity"></input>
    </div>
    <div class="col-md-4">
        <label for="ostate">State:</label>
            <input type ="text" placeholder="BC" id="ostate" name="ostate"></input>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
        <label for="opostal">Postal Code:</label>
            <input type ="text" placeholder="V4N 2T4" id="opostal" name="opostal"></input>
    </div>
    <div class="col-md-offset-2 col-md-4"><input type ="submit" value="Submit">
    </div>
    </fieldset>
    </form>
    </container>

<?php 
include "footer.php";
?>