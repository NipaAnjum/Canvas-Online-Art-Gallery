<html>
<?php
include_once "config.php";
include "navbar.php";
$sq = "SELECT * FROM painting";
$mq = mysqli_query($db,$sq) or die("not working");
while ($row = mysqli_fetch_array($mq))
{

  $path = $row['paint_dir'];
  $pname = $row['p_title'];
  $pyear = $row['p_year'];
  $pprice = $row['p_price'];
  $aname = $row['artist_name'];
  $li = "New folder/logo/crt.png";
?>
<body>
<div class="responsive">
  <div class="gallery" style="background: rgb(238, 234, 234)">
    <a target="_blank" href="<?php echo $path?>">
      <?php echo '<img src="'.$path.'" alt="'.$pname.'" width="600" height="400">'?>
    </a>
    <div class="desc"><?php echo "<b>".$pname.", ".$pyear. "</b>"?></div>
    <div class="desc"><?php echo "<b>".$aname."</b>"?></div>
    <div class="desc"><?php echo "<b> Price : ".$pprice."</b>"?></div>
  </div>
</div>
<?php
}
?>
<div class="clearfix"></div>

<div style="padding:6px;font-family: 'Times New Roman', Times, serif;">
    <p><b> <br> An artist is a person engaged in an activity related to creating art, practicing the arts, or demonstrating an art. The common usage in both everyday speech and academic discourse is a practitioner in the visual arts only. The term is often used in the entertainment business, especially in a business context, for musicians and other performers (less often for actors). "Artiste" (the French for artist) is a variant used in English only in this context; this use is becoming rare. Use of the term to describe writers, for example, is valid, but less common, and mostly restricted to contexts like criticism. </b></p>
  <p><b> Bangladeshi art is a form of visual arts that has been practiced throughout the land of what is now known as Bangladesh. Bangladeshi art has a perennial history which originated more than two thousand years ago and is practiced even to this date. Among the various forms of Bangladeshi art, photography, architecture, sculpture and painting are the most notable. <br> <br></b></p></div>



    <div class="footer" style="background-image:linear-gradient(to right,#333,rgb(117, 112, 112))">
        <div class="newspaper">
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest"></i>
            <br> <br>
            Customer Support <br>
            01720001110 <br>
            returns <br>
            FAQ
        </div>
    </div>
</body>
</html>