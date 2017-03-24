<?
include ('includes/db_con.php');
// Connect to mySQL
$conn = dbConnect('query');
//Prepare the SQL query
$sql = "SELECT * FROM cafes WHERE cafe_area = 'East'";
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

<h1>East London Coffee</h1>
<p>I've currently listed a total of <?php echo "$numRows"; ?> cafes in east London.</p>
               <h3>Map</h3>


               <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
<iframe async src="https://www.google.com/maps/d/embed?mid=1-7DNq6uwYVO8nRuTGH45OEXa__o&hl=en" width="100%" height="480"></iframe>

</div>
<br  /><br  />

<div class="uk-section-default">

<table class="uk-table uk-table-striped">
  <thead>
  <tr>
    <th class="uk-width-1-4 uk-text-bold">
      Cafe
    </th>
    <th class="uk-width-1-4 uk-text-bold">
      Rating
    </th>
    <th class="uk-width-1-4 uk-text-bold">
      Tags
    </th>
    <th class="uk-width-1-4 uk-text-bold">
      More
    </th>
  </tr>
  </thead>
  <tfoot>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</tfoot>
  <tbody>


  <?php while ($row = $noofcafes->fetch_assoc()){ ?>
    <tr>
    <td>
    <?php echo $row['cafe_name']; ?>
    </td>
    <td class="">
    <?php echo $row['rating']; ?>
    </td>
    <td>
    <?php echo $row['tags']; ?>
    </td>
    <td>
      <a href="cafes_page.php?cafe_id=<?php echo $row['cafe_id']; ?>">View details</a>
    </td>
  </tr> <?php }?>
    </tbody>
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
<!--GA Tracking-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-211576-10', 'auto');
  ga('send', 'pageview');

</script>
  </body>
  </html>
