<?php
$page_title = "Flowershop";

$nav_flowershop_class = "active_page";

$form_name = $_POST["name"];
$form_phone = $_POST["phone"];
$form_bouquet = $_POST["bouquet"];
?>
<!DOCTYPE html>
<html lang="en">

<?php include "includes/meta.php" ?>

<body>
  <?php include "includes/header.php" ?>

  <main class="flowers">

    <h2><?php echo $page_title; ?></h2>

    <p>We've received your sample request. We will contact you shortly.</p>

    <h3>Flower Sample Confirmation</h3>

    <dl>
      <dt>Business Name</dt>
      <dd><?php echo htmlspecialchars($form_name); ?></dd>

      <dt>Contact Phone</dt>
      <dd><?php echo htmlspecialchars($form_phone); ?></dd>

      <dt>Bouquet</dt>
      <dd><?php echo htmlspecialchars($form_bouquet); ?></dd>
    </dl>

  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
