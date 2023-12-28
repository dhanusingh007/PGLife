<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGLife | Welcome Page</title>
    <?php include "includes/head_links.php";?> 
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
<?php include "includes/header.php";?> 
    <main class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot.</h2>
        <form id="search-form" action="property_list.php" method="GET">
           <div class="input-group city-search">
              <input type="text" class="form-control input-city" id="city" name="city" placeholder="Enter Your City To Search For PG's...">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                </button>
              </div>
           </div>
        </form>
    </main>
    <div class="page-container">
        <h1 class="city-heading">Major Cities</h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";?> 

</body>
</html>