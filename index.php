<?php include('includes/suggest_code.php');
include('includes/pdo_db_con.php');
$conn = dbConnectpdo();
$last3cafes = "SELECT q.cafe_id, q.cafe_name
    FROM (SELECT cafe_id, cafe_name
              FROM cafes
              ORDER BY cafe_id DESC LIMIT 3) q
    ORDER BY q.cafe_id ASC";
$result3 = $conn->query($last3cafes);

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
        <img src="img/header_img.jpg" alt="" class="uk-width-1-1">
        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-center uk-light">
            <h1 class="uk-heading-primary">Gourmet Coffee London</h1>
            <p>A guide to the very best coffee in London.</p>
        </div>
      <!--End main header img--></div>
<div class="uk-container"><!--Start of main wrapper-->
  <div uk-grid>
      <div class="uk-width-expand@m">

               <div class="uk-card uk-card-default uk-card-body">
                   <h2>You Love Coffee</h2>
                   <p>And so do I.  That's why I've set up the webite to help you discover the very best coffee that London has to offer. London is a vast city, so I've broken the cafe area into <a href="cafes/cafes_north.php"type="button" class="uk-button uk-button-text">North</a>, <a href="cafes/cafes_south.php" type="button" class="uk-button uk-button-text">South</a>, <a href="cafes/cafes_east.php" type="button" class="uk-button uk-button-text">East</a> and <a href="cafes/cafes_west.php" type="button" class="uk-button uk-button-text">West</a>. I don't intend for this to be an exahuastive list of every coffee shop in London, rather the smaller establishments I've personally enjoyed. I'd also love to hear from you if you've found a cafe that I've not listed, so please <a href="#" uk-toggle="target: #modal-example">send me your suggestions</a>.</p>
                   <div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>The <a href="https://www.londoncoffeefestival.com/">London Coffee Festival</a> is nearly here. 06-09 April 2017 at the Old Truman Brewery, Brick Lane, London. </a></p>
</div>
                   <h3>Recently Added</h3>
                   <table class="uk-table uk-table-striped">
                     <thead>
                     <tr>
                       <th class="uk-width-2-4 uk-text-bold">
                         Cafe
                       </th>
                       <th class="uk-width-2-4 uk-text-bold">
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

                   <?php foreach ($conn->query($last3cafes) as $row) { ?>
                       <tr>
                       <td>
                       <?php echo $row['cafe_name']; ?>
                       </td>
                       <td>
                         <a href="cafes_page.php?cafe_id=<?php echo $row['cafe_id']; ?>">View details</a>
                       </td>
                     </tr>
                     <?php } ?>
                       </tbody>
                   </table>

               <h3>Featured Coffee Shops</h3>
               <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div><div class="uk-card">
    <div class="uk-card-header">
        <h3 class="uk-card-title uk-text-small">Peanut Vendor</h3>
    </div>
    <div class="uk-card-body uk-text-small"></div>
    <div class="uk-card-footer uk-text-small"><a href="cafes/peanut_vendor.php" type="button" class="uk-button uk-button-text">View</a></div>
</div></div>
    <div><div class="uk-card">
    <div class="uk-card-header">
        <h3 class="uk-card-title uk-text-small">Mae+Harvey</h3>
    </div>
    <div class="uk-card-body uk-text-small">All day + evening café, on Roman Road, Bow.</div>
    <div class="uk-card-footer uk-text-small"><a href="cafes/mae_harvey.php" type="button"class="uk-button uk-button-text">View</a></div>
</div></div>
    <div><div class="uk-card">
    <div class="uk-card-header">
        <h3 class="uk-card-title uk-text-small">Loafing</h3>
    </div>
    <div class="uk-card-body uk-text-small"></div>
    <div class="uk-card-footer uk-text-small"><a href="cafes/loafing.php" type="button"class="uk-button uk-button-text">View</a></div>
</div></div>
</div>


</div>

<div class="uk-card uk-card-default">
    <div class="uk-card-media-top">
        <img src="img/womanreadingonplanecrop.jpg" alt="">
    </div>
    <div class="uk-card-body"><H3>Latest Article</H3>
    <p>
      blah bs-tether-element-attached-bottom
    </p>
  <a class="uk-button uk-button-default" href="">Read more</a>
</div>
           </div>



</div><!--End of left column-->




      <div class="uk-width-1-3@m">
        <div>
               <div class="uk-card uk-card-default uk-card-body">
                   <h2>Suggest a Cafe</h2>
                   <p>Know a great place that's not on the site? Just let me know.</p>
                   <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example">Suggest</button>
                   <?php echo $result; ?>

<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog">
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="uk-modal-header">
        <h2 class="uk-modal-title">Send your suggestion</h2>
            </div>
            <div class="uk-modal-body">


        <form class="form-horizontal" role="form" method="post" action="index.php">
 <div class="form-group">
   <label for="name" class="control-label">Name</label>
   <div class="">
     <input type="text" class="form-control uk-input" id="name" name="name" placeholder="First &amp; Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
     <?php echo "<p class='uk-text-warning'>$errName</p>";?>
   </div>
 </div>
 <div class="form-group">
   <label for="email" class="control-label">Email</label>
   <div class="">
     <input type="email" class="uk-input" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
     <?php echo "<p class='uk-text-warning'>$errEmail</p>";?>
   </div>
 </div>
 <div class="form-group">
   <label for="message" class="control-label">Message</label>
   <div class="">
     <textarea class="uk-textarea" rows="5" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
     <?php echo "<p class='uk-text-warning'>$errMessage</p>";?>
   </div>
 </div>
 <div class="form-group">
   <label for="human" class="control-label">2 + 3 = ?</label>
   <div class="">
     <input type="text" class="form-control uk-input" id="human" name="human" placeholder="Your Answer">
     <?php echo "<p class='uk-text-warning'>$errHuman</p>";?>
   </div>
 </div>
 <div class="form-group">
   <div class="">

   </div>
 </div>
 <div class="form-group">
   <div class="">
     <?php echo $result; ?>
   </div>
 </div>
 </div>
 <div class="uk-modal-footer">
 <p class="uk-text-right">
     <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
         <input id="submit" name="submit" type="submit" value="Submit" class="uk-button uk-button-primary">
 </p></div>
</form>

    </div>


               </div>
               <hr />

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
