<?php
/* Note: No credit is provided for submitting design and/or code that is     */
/*       taken from course-provided examples.                                */
/*                                                                           */
/* Do not copy this code into your project submission and then change it.    */
/*                                                                           */
/* Write your own code from scratch. Use this example as a REFERENCE only.   */
/*                                                                           */
/* You may not copy this code, change a few names/variables, and then claim  */
/* it as your own.                                                           */
/*                                                                           */
/* Examples are provided to help you learn. Copying the example and then     */
/* changing it a bit, does not help you learn the learning objectives of     */
/* this assignment. You need to write your own code from scratch to help you */
/* learn.                                                                    */

$page_title = "Product Reviews";

$nav_reviews_class = "active_page";

const RATING_STARS = array(
  1 => "★☆☆☆☆",
  2 => "★★☆☆☆",
  3 => "★★★☆☆",
  4 => "★★★★☆",
  5 => "★★★★★"
);

const PRODUCTS = array(
  1 => "Flyknit",
  2 => "Air Zoom",
  3 => "Roshe",
  4 => "Lunar Guide",
  5 => "Airforce"
);

// load the database library
require_once "includes/db.php";

// open database
$db = open_sqlite_db("secure/site.sqlite");
?>
<!DOCTYPE html>
<html lang="en">

<?php include "includes/meta.php" ?>

<body>
  <?php include "includes/header.php" ?>

  <main class="reviews">
    <h2><?php echo $page_title; ?></h2>

    <ul>
      <?php
      // query the reviews table and get all records
      $result = exec_sql_query($db, "SELECT * FROM reviews;");
      $records = $result->fetchAll();

      // create a review tile for each record
      foreach ($records as $record) {
        $name = PRODUCTS[$record["product"]];
        $rating = RATING_STARS[$record["rating"]];
        $comment = $record["comment"];

        // tile partial
        include "includes/review-tile.php";
      } ?>
    </ul>

  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
