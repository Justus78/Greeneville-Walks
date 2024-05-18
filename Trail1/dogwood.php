<!DOCTYPE html>
<html>

<head>
  <title>Flowering Dogwood</title>
  <meta name='viewport' content='width=device-width' initial-scale='1.0' />
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel='stylesheet' type='text/css' href='../trees.css' />
</head>

<body>

  <!-- page title and nav links -->
  <h1 class='name'>Flowering Dogwood (Common Name)</h1>
  <h1>Cόrnus flόrida (Scientific Name)</h1>
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
    </div>
    <!--Links for each of the photos, need 1 link for each photo-->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="..\niswonger_trail\dogwood\photo1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\dogwood\photo2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\dogwood\photo3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\dogwood\photo4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\dogwood\photo5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\dogwood\photo6.jpg" class="d-block w-100" alt="...">
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
  <p>Fun Fact: Coming Soon!</p>
  <section class='infoLinks'>
    <div>
      <h2 class='info'>General</h2>
      <p>
        The flowering dogwood is widely used as an ornamental with several
        cultivars. In the fall the tree’s leaves are one of the first to turn a
        red color. It is a small in a small bushy tree which rarely attains a height
        of more than 40 feet. Leaves are opposite, oval and arcuately veined. Flowers
        appear before the leaves in early spring. The flowers are small, perfect
        in heads with four conspicuous white or pinkish colored notched bracts. Fruit
        is a bright red drupe and contains 2 seeds. Because the Dogwood is shallow
        rooted it is prone to drought. Unmaintained trees are vulnerable to Dogwood
        anthracnose, a damaging fungus disease that has spread throughout the United States.
        It has caused major destruction to native wild stands.
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
</body>

</html>