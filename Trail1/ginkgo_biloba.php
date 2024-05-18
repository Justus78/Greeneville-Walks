<!DOCTYPE html>
<html>

<head>
  <title>Ginkgo</title>
  <meta name='viewport' content='width=device-width' initial-scale='1.0' />
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel='stylesheet' type='text/css' href='../trees.css' />
</head>

<body>

  <!-- page title and nav links -->
  <h1 class='name'>Ginkgo (Common Name)</h1>
  <h1>Ginkgo Biloba (Scientific Name)</h1>
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
        <img src="..\niswonger_trail\ginkgoBiloba\photo1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\ginkgoBiloba\photo2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\ginkgoBiloba\photo3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\ginkgoBiloba\photo4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\ginkgoBiloba\photo5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..\niswonger_trail\ginkgoBiloba\photo6.jpg" class="d-block w-100" alt="...">
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
  <p>Fun Fact: The Ginkgo Biloba is also known as the Maiden Hair Tree.</p>
  <section class='infoLinks'>
    <div>
      <h2 class='info'>General</h2>
      <p>
        Commonly known as ginkgo or gingko but also known as the maidenhair tree.
        This tree species is native to China. It is the only living species in the
        order Ginkgoales, which first appeared over 290 million years ago. Because
        fossilized remains dating back to the Permian period morphologically appear
        resemble our modern-day Gingko tree, it is considered a “living fossil,” a
        term used to refer to species that have changed little since their discovery
        in the fossil record. The Ginkgo tree was cultivated for centuries in China,
        especially around Buddhist temples and monasteries. The tree was first introduced
        to the United States in 1784. Today it is a popular tree used in city landscaping
        because of its tolerance to pollution. The leaves turn a beautiful golden yellow
        in the fall. The Ginkgo tree moderate sized and its leaves have a unique fan-like
        shape with dichotomously branching leaves, that may be notched. The tree has separate
        male and female trees and is dioecious. Female trees can sometimes be discriminated
        against in landscaping selection due to the female’s production of a fleshy
        strawberry-shaped coat, which surrounds their seeds. This coat when rotting or
        stepped upon has a distinctive smell described by some as rancid butter or dog feces.
        Despite this the seed, or gingko nut is considered a delicacy in China and served at
        weddings because it is thought to bring food luck. Today, extracts of the leaves
        are used as commercially available herbal supplements to improve short term memory and enhance concentration.
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