<?php
// Connect to mySQL
include ('includes/pdo_db_con.php');
$conn = dbConnectpdo();
$stmt = $conn->prepare("SELECT * FROM cafes where cafe_id = :cafe_id ORDER BY cafe_id DESC");
$stmt->bindParam(':cafe_id', $_GET['cafe_id'], PDO::PARAM_INT);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS Files-->
    <link rel="stylesheet" href="css/uikit.min.css" />
    <title>Gourmet Coffee London - <?php echo $row['cafe_name']; ?></title>
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
  <div class="uk-child-width-expand@s" uk-grid><!--Start of grid-->

    <div><!--Start left column-->
        <div class="uk-card uk-card-default uk-card-body">
          <article class="uk-article">
          <?php       while($row = $stmt->fetch())
                 {?>
                     <h1 class="uk-article-title"><?php echo $row['cafe_name'] ?> </h1>
                     <P>

                     <?php echo $row['cafe_desc']; ?>
                     </P>
                     <p class="uk-article-meta">
                      <span class="uk-margin-small-right" uk-icon="icon: tag"></span><?php echo $row['tags']; ?><br />
                      <span class="uk-margin-small-right" uk-icon="icon: link"></span><a href="<?php echo $row['cafe_url']; ?>"><?php echo $row['cafe_url']; ?></a><br />
                      <span class="uk-margin-small-right" uk-icon="icon: history"></span><?php echo date('j/F/Y',strtotime($row['cafe_last_updated'])); ?>
                     </p>


            </article>

            <a href="cafes<?php echo $row['cafe_area']; ?>.php">Back to list</a>
            <?php   } ?>
        </div>
    </div><!--End left column-->
    <div class="uk-width-1-3"><!--Start right column-->
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div><!--End right column-->


















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
