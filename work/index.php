<?php
include_once $_SERVER['DOCUMENT_ROOT']."/gsargent/modules/base-variables-functions.php";

$directoryName = 'about';
$pageTitle = 'About';
$pageDescription = "I'm Greg, a digital product designer living just north of Dallas, TX.";

 ?>

<!DOCTYPE html>
<html lang="en-US">
<?php include_once $_SERVER['DOCUMENT_ROOT']."/gsargent/modules/author-statement.php"; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT']."/gsargent/modules/head.php"; ?>

<body>
  <?php include_once $_SERVER['DOCUMENT_ROOT']."/gsargent/modules/header.php"; ?>

  <main>
    <section class="heroSection">
      <h1 class="fadeIn animationDelay1"><?php echo $pageTitle; ?></h1>
      <p class="fadeIn animationDelay2"><?php echo $pageDescription; ?></p>
    </section>

  </main>

  <?php include_once $_SERVER['DOCUMENT_ROOT']."/gsargent/modules/footer.php"; ?>

</body>

</html>
