<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="style.css.php">
    <title>Document</title>
</head>
<body>

  <?php
    $title = "Startseite";
    include('template/navBar.php');
    #echo $_SESSION["username"];
  ?>
  <script>swal("Wichtiger Hinweis", "Liebe Kinogäste, aus aktuellem Anlass sind wir gesetzlich dazu verpflichtet, unsere Kinos mit sofortiger Wirkung vorübergehend zu schließen. Euer Sternekino Team", "warning");</script>
    <div class="container text-black" id="main">
    <h1 class=" text-center">Sternekino</h1>  
    <h4 class="text-center">Willkommen auf der Webseite von Sternenkino. Hier finden sie Informationen über aktuelle Filme.</h1>
    <div id="mainCarousel" style="heigth=500px">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="src\filmbilder\starwars.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="src\filmbilder\goete.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="src\filmbilder\titanic.jpg" class="d-block w-100" alt="...">
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
        <br>
      </div>  
    </div>
  </div>



  <?php
    include('template/footer.php');
  ?>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
