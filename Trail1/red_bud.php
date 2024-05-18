<!DOCTYPE html>
<html>

<head>
  <title>Eastern Redbud</title>
  <meta name='viewport' content='width=device-width' initial-scale='1.0' />
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel='stylesheet' type='text/css' href='../trees.css' />
</head>

<body>

  <!-- page title and nav links -->
  <h1 class='name'>Eastern Redbud (Common Name)</h1>
  <h1>Cercis canadensis (Scientific Name)</h1>
  <p class='navLinks'>
    <a href='trail1.html'>Trail 1: The Niswonger Loop Trail</a>
    <!--<a href='trail1.html'>Trail#</a>-->
  </p>

  <!--Carousel using bootstrap-->
  <div id="carouselExampleIndicators" class="carousel slide w-25 mx-auto d-block">
    <div class="carousel-indicators">
      <!--Navigation buttons on bottom of pictures, need 1 for each picture-->
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
        aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
        aria-label="Slide 7"></button>
    </div>
    <!--Links for each of the photos, need 1 link for each photo-->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="..\niswonger_trail\redbud\photo1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\redbud\photo2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\redbud\photo3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\redbud\photo4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\redbud\photo5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\redbud\photo6.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\redbud\photo7.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <!-- buttons to navigate through the pictures-->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end bootstrap carousel-->
  <p>Fun Fact: Coming Soon!!!</p>
  <section class='infoLinks'>
    <div>
      <h2 class='info'>General</h2>
      <p>
        This small tree is the state tree of Oklahoma. It is often used as an
        ornamental but is an important component of the secondary forest canopy.
        Leaves are simple, alternate and broadly heart shaped (chordate). Size
        wise they typically are 2.5 to 5 inches long (6 to 12.5 cm) and wide.
        It produces bright pink papilionaceous flowers in the spring before the
        leaves are present. These flowers are edible and very high in ascorbic acid.
        Fruit is a flat legume 2.5 to 3.5 inches (6 to 8 cm) long and turns black
        as it matures. Bark is smooth, dark grey to black in color.
      </p>
    </div>
    <div>
      <h2 class='info'>Literature</h2>
      <p>Coming Soon!!! Check back for updates!</p>
    </div>
    <div>
      <h2 class='info'>Music</h2>
      <p>Coming Soon!!! Check back for updates!</p>
    </div>
  </section>
  <br><br><br><br>
  <?php include '../header_navbar_footer/footer.php' ?>

</html>