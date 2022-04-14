<!--Añadido por Sebastian pensando  que asi lo recibiria-->
<?php
$categoria = $_POST['categoria'];
$nombre = $_POST['nombre'];
$Imagen = $_POST['Imagen'];
$terminos =$_POST['terminos'];

echo $categoria;
echo $nombre;
echo $Imagen;
echo $terminos;
?>
<!--End Archivo añadido por sebastian -->

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FYPX81JMET"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FYPX81JMET');
</script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dantaventura</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">-->
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!--<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.6.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  
  <main id="main">

  <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <img src="assets/img/logodanta2.svg" height="200">
            </div>
  </div>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

      <!--    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Galeria de Imágenes</h2>
          <p>Las mejores fotos de los paisajes más hermosos del corregimiento la Danta, el placer de ver las maravillas de la naturaleza.   </p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas la Fotos</li>
              <li data-filter=".filter-app">Cavernas</li>
              <li data-filter=".filter-card">Cascadas</li>
              <li data-filter=".filter-web">Balnearios</li>
              <li data-filter=".filter-web">Cultura</li>
            </ul>
          </div>
        </div> -->


<table class="table">
      <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Foto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Cascada 1</th>
      <td><img src="assets/img/apple-touch-icon.png" alt="Imagen categoría" class="rounded-circle" width="50" heigth="50"></td>
      <td><a href="#"><i style="font-size: 50px" class="bx bx-edit text-success"></i></a> <a href="#"><i style="font-size: 50px" class="bx bx-trash text-danger"></a></i></td>
    </tr>
    <tr>
    <th scope="row">Cascada 2</th>
      <td><img src="assets/img/apple-touch-icon.png" alt="Imagen categoría" class="rounded-circle" width="50" heigth="50"></td>
      <td><a href="#"><i style="font-size: 50px" class="bx bx-edit text-success"></i></a> <a href="#"><i style="font-size: 50px" class="bx bx-trash text-danger"></a></i></td>
    </tr>
    <tr>
    <th scope="row">Cascada 3</th>
      <td><img src="assets/img/apple-touch-icon.png" alt="Imagen categoría" class="rounded-circle" width="50" heigth="50"></td>
      <td><a href="#"><i style="font-size: 50px" class="bx bx-edit text-success"></i></a><a href="#"><i style="font-size: 50px" class="bx bx-trash text-danger"></a></i></td>
    </tr>
  </tbody>
</table>
</div>

    
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>