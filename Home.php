<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>CRUD+</title>
    <style>
      .height{
        height: 500px;
      }
      .h-img{
        height: 200px;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <?php include 'navbar.php'?>

    <!-- carasoul -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 height" src="img/img2.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 height" src="img/img1.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 height" src="img/img3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Cards -->
    <h1 class="text-center mt-2">CRUD</h1>
    <div class=" d-flex justify-content-between m-2">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top h-img" src="img/create.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Create</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="https://www.w3schools.com/sql/sql_create_table.asp" target="_blank" class="btn btn-primary">Go Here</a>
        </div>
      </div>
      
      <div class="card" style="width: 18rem;">
        <img class="card-img-top h-img" src="img/read.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Read</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="https://www.w3schools.com/sql/sql_select.asp" target="_blank" class="btn btn-primary">Go Here</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top h-img" src="img/update.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Update</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="https://www.w3schools.com/sql/sql_update.asp" target="_blank" class="btn btn-primary">Go Here</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top h-img" src="img/delete.jpg"  alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Delete</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="https://www.w3schools.com/sql/sql_delete.asp" target="_blank" class="btn btn-primary">Go Here</a>
        </div>
      </div>
    </div>
  
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>