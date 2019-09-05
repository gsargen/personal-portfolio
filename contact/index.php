<?php
include_once $_SERVER['DOCUMENT_ROOT']."/gsargent/modules/base-variables-functions.php";

$directoryName = 'contact';
$pageTitle = 'Contact';
$pageDescription = "Looking to collaborate on a project? Let's get in touch!";

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
