<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $page_title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/nav.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chivo|Quattrocento+Sans" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
    <header>
        <div class="wide">
        </div>
    </header>

    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Solmaris Condominium Group</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="condoLocations.php">Condo Locations</a></li>
          <li><a href="rentalUnits.php">Rental Units</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Condo Owners<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="ownerTable.php">View Condo Owners</a></li>
              <li><a href="condoOwners.php">Update Owner Information</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Renters<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="renterTable.php">View Condo Renters</a></li>
              <li><a href="rentalApplication.php">Create Renter Profile</a></li>
              <li><a href="deleteRenterProfile.php">Delete Renter Information</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  
    <div id="content"><!-- Start of the page-specific content. -->
 