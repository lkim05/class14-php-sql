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

$page_title = "Transcript";

$nav_transcript_class = "active_page";

// key/value coding for academic terms
const TERMS = array(
  101 => "2020FA",
  102 => "2021SP",
  103 => "2021FA",
  104 => "2022SP",
  105 => "2022FA",
  106 => "2023SP"
);

// key/value coding for academic year
const ACADEMIC_YEAR = array(
  1 => "First-Year",
  2 => "Sophomore",
  3 => "Junior",
  4 => "Senior"
);

// load the database library
require "includes/db.php";

// open database
$db = open_sqlite_db("secure/site.sqlite");

// query grades table
$result = exec_sql_query($db, "SELECT class, term, acad_year, grade FROM grades;");

// get records from query
$records = $result->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<?php include "includes/meta.php" ?>

<body>
  <?php include "includes/header.php" ?>

  <main class="transcript">
    <h2><?php echo $page_title; ?></h2>

    <!-- Note: You may not copy the instructor's code/design and submit it  -->
    <!--       as your own.                                                 -->
    <!--                                                                    -->
    <!-- We studied textual catalog design patterns in class, there are     -->
    <!-- many design alternatives for for presenting textual information.   -->
    <!-- You may use this design for inspiration. However, you must design  -->
    <!-- your own.                                                          -->
    <!--                                                                    -->
    <!-- Remember, design is a learning objective of this class. Your your  -->
    <!-- future employers will expect you to  be able to design on your own -->
    <!-- without copying someone else's work. Use this experience as        -->
    <!-- practice.                                                          -->

    <table>
      <tr>
        <th>
          Class
          Term
          Year
          Grade
        </th>
      </tr>

      <?php
      // write a table row for each record
      foreach ($records as $record) {
        $course = $record["class_num"];
        $term = TERMS[$record["term"]];
        $year = ACADEMIC_YEAR[$record["acad_year"]];
        $grade = $record["grade"];

        // row partial
        include "includes/transcript-record.php";
      } ?>
    </table>

  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
