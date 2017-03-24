<?
include ('includes/db_con.php');
// Connect to mySQL
$conn = dbConnect('query');
//Prepare the SQL query
$sql = "SELECT * FROM `cafes`";
//Submit the query and capture the result
$noofcafes = $conn->query($sql) or die(mysqli_error());
//find out how many records were retrieved
$numRows = $noofcafes->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS Files-->
    <link rel="stylesheet" href="css/uikit.min.css" />
  </head>
  <body>
<!--Nav code--><?php include ('includes/main_nav.php'); ?>
<!--Main header img--><div class="uk-inline uk-width-1-1">
        <img src="img/header_img_thin.jpg" alt="" class="uk-width-1-1">
        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-center uk-light">
        </div>
      <!--End main header img--></div>
<div class="uk-container"><!--Start of main wrapper-->
  <div uk-grid>
      <div class="uk-width-expand@m">

               <div class="uk-card uk-card-default uk-card-body">


               <h3>Map</h3>

               <p>There's a total of <?php echo "$numRows"; ?> cafes.</p>
               <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
<iframe async src="https://www.google.com/maps/d/embed?mid=1-7DNq6uwYVO8nRuTGH45OEXa__o&hl=en" width="auto" height="480"></iframe>

</div>
<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
<table>
  <tr>
    <th>
      Cafe
    </th>
    <th>
      Desciption
    </th>
  </tr>
  <?php while ($row = $noofcafes->fetch_assoc()){ ?>
    <tr>
    <td>
    <?php echo $row['cafe_name']; ?>
    </td>
    <td>
    <?php echo $row['cafe_desc']; ?>
    </td>
    <td>
      <a href="cafes_page.php?cafe_id=<?php echo $row['cafe_id']; ?>">View details</a>
    </td>
  </tr> <?php }?>
</table>

</div>

</div>





</div><!--End of left column-->




      <div class="uk-width-1-3@m">
        <div>
               <div class="uk-card uk-card-default uk-card-body">

           </div>
         </div>
      </div><!--End of right column-->
  </div><!--End of main grid-->
</div><!--End of main wrapper-->

<!--Start of footer-->
<div class="uk-section uk-section-secondary uk-light">
    <div class="uk-container">

        <h3>Section Secondary</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>
  <!--JS Scripts-->
  <script src="js/jquery.min.js"></script>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
  </body>
  </html>
