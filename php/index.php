
<?php include_once "parts/head.php"?>

<body>
<?php require 'C:/xampp/htdocs/sablona/php/parts/header.php';?>
<?php 
$file_path1 = 'C:/xampp/htdocs/sablona/php/parts/header.php'; 
if(!require($file_path1)){
  echo"Failed to include $file_path1";
}
?>
    
    <main>
      <section class="slides-container">
        <?php 
        include_once "functions.php";
         generateSlides("img/banners"); 
        ?>
        
        <a id="prev" class="prev">❮</a>
        <a id="next" class="next">❯</a>
        
      </section>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
          </div>
        </div>
      </section>
      <section class="container">
        <div class="row">
          <div class="col-50">
            <h2>Mollit cupidatat velit quis irure non eiusmod culpa cillum velit magna est aliquip.</h2>
          </div>
          <div class="col-50">
            <p>Nulla dolore sit esse pariatur culpa sint nulla fugiat nulla ut. Sit adipisicing fugiat id consequat qui est. Nulla ea aliquip culpa nulla mollit do excepteur ex ullamco consequat tempor consectetur. Tempor et ea voluptate irure est magna magna reprehenderit qui non dolore. Consequat id ad cillum do qui. Proident ipsum enim eiusmod fugiat quis anim consequat ullamco mollit excepteur. Eiusmod eu ad irure anim velit laborum commodo nostrud pariatur id ea ad.</p>
            <p>Incididunt pariatur ipsum in culpa sit cillum consequat nostrud do. Esse commodo ad qui ea. Pariatur elit mollit deserunt aute do culpa eu veniam pariatur in adipisicing qui adipisicing irure. Est minim sint ipsum nulla eiusmod. Amet do officia consectetur labore. Id aute labore culpa aliquip. Adipisicing mollit excepteur Lorem quis elit ipsum irure quis occaecat qui consectetur ad irure dolor.</p>
           <?php pridajPozdrav();?>

          </div>
        </div>
      </section>
    </main>
<section class="container">
    <div class="row">
        <div class="col-100 text-center">
        </div>
    </div>

</section>
<?php
$file_path = "C:/xampp/htdocs/sablona/php/parts/footer.php";
if(!include($file_path)){
  echo"Failed to include $file_path";
} /*include 'C:/xampp/htdocs/sablona/php/footer.php';*/ ?>

<script src="js/loadSlides.js"></script>
<script src="js/menu.js"></script>
<script src="js/slider.js"></script>
</body>
</html>