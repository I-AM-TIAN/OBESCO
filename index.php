<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="stylesheet" href="./styles/general.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <title>Home</title>
</head>

<body>
  <?php
  include("./template/nav.php");
  ?>
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-color: rebeccapurple"></div>
      <div class="swiper-slide" style="background-color: rebeccapurple"></div>
      <div class="swiper-slide" style="background-color: greenyellow"></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="contenido">
    <?php
    include("./template/options.php");
    ?>
    <div class="texto">
      <h1>CONTENIDO</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, non
        quasi illum repudiandae accusamus expedita quia, placeat qui quas
        porro fuga laboriosam quod? Earum placeat, ad quibusdam rerum dolorem
        explicabo ab maxime perferendis saepe quod facilis recusandae illo
        quae totam delectus repellat minima officia commodi debitis animi quia
        libero? Praesentium, necessitatibus laudantium pariatur sapiente rem
        doloremque quidem. Eos a impedit magnam commodi numquam libero
        distinctio ex minus nihil blanditiis reprehenderit fugiat perspiciatis
        officia, placeat cumque quas enim cupiditate sequi soluta, quidem
        aperiam id. Dolorum nostrum, odit aperiam vero necessitatibus iure! Ab
        sit id quisquam? Vero neque corrupti beatae suscipit obcaecati iusto
        reprehenderit ea. Possimus mollitia adipisci tempora in dolor nihil
        numquam consectetur hic porro? Saepe dolor minus est cum impedit odit
        commodi voluptates quasi, modi magnam? Odit, delectus. Id incidunt
        dolorem pariatur quasi, voluptatibus at tempora error eveniet ducimus.
        Cum odit voluptatem tenetur unde nam? Incidunt fugit temporibus ex est
        dicta nobis magni illum adipisci asperiores consequuntur cupiditate
        eos velit quas dolor, fuga facilis dolores quam pariatur! Doloremque
        dolor architecto voluptatem laborum? Nobis harum, quam quas architecto
        sint autem quisquam voluptate perferendis adipisci voluptatum
        molestiae pariatur nesciunt obcaecati quis, voluptates modi odit nisi
        nemo, eos commodi incidunt sunt quaerat neque.
      </p>
    </div>
  </div>
  <script src="./controller/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".swiper", {
      direction: "horizontal",
      loop: true,
      effect: "fade",
      autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },
    });
  </script>
  <?php
  include("./template/footer.php");
  ?>
</body>

</html>