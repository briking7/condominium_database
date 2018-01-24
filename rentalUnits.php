<?php 
$page_title = "Rental Units";
include "header.php";
?>

<div class="row">
    <div class="col-md-12">
    <h1>Rental Units Available At Solmaris</h1>
        <div class="row">    
            <div class="col-md-offset-1 col-md-10">
             <h2>Condo units available to be rented are listed below:</h2>
            </div>
        </div>
    </div>
</div>

<?php 
include "rental_units_table.php";

include "footer.php";
?>