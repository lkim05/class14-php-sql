<?php
$page_title = "Flowershop";

$nav_flowershop_class = "active_page";
?>
<!DOCTYPE html>
<html lang="en">

<?php include "includes/meta.php" ?>

<body>
  <?php include "includes/header.php" ?>

  <main class="flowers">

    <h2><?php echo $page_title; ?></h2>

    <p>Welcome to the 2300 Flower Shop! We are a wholesale supplier of flowers. We specialize in bulk sales of fresh cut-flowers.</p>

    <section>
      <h2>Sample Request Form</h2>

      <p>Our premium quality flowers are the best in Ithaca. See the quality yourself! Use the form below to request a <em>free</em> sample bouquet of roses, daisies, or gardenias.</p>

      <form method="post" action="/flowershop/confirmation" novalidate>

        <div class="label-input">
          <label for="name_field">Business Name:</label>
          <input id="name_field" type="text" name="name" />
        </div>

        <div class="label-input">
          <label for="phone_field">Contact Phone:</label>
          <input id="phone_field" type="tel" name="phone" />
        </div>

        <div class="form-group label-input" role="group" aria-labelledby="bouquet_head">
          <div id="bouquet_head">Bouquet:</div>

          <div>
            <div>
              <input type="radio" id="roses_input" name="bouquet" value="roses" />
              <label for="roses_input">Roses</label>
            </div>
            <div>
              <input type="radio" id="daisies_input" name="bouquet" value="daises" />
              <label for="daisies_input">Daisies</label>
            </div>
            <div>
              <input type="radio" id="gardenias_input" name="bouquet" value="gardenias" />
              <label for="gardenias_input">Gardenias</label>
            </div>
          </div>
        </div>

        <div class="align-right">
          <input type="submit" value="Request Sample" />
        </div>
      </form>
    </section>

  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
