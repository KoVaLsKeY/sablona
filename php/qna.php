<!DOCTYPE html>
<html lang="sk">
<?php include_once "parts/head.php"?>
<body>
<?php include_once 'functions.php';
$file_path1 = 'C:/xampp/htdocs/sablona/php/parts/header.php'; 
if(!require($file_path1)){
  echo"Failed to include $file_path1";
}?>
  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>
    
    <?php 
    insertQnA();
    ?>
</section>
    </section>
  </div>
  </main>
  <?php
$file_path = "C:/xampp/htdocs/sablona/php/parts/footer.php";
if(!include($file_path)){
  echo"Failed to include $file_path";
} /*include 'C:/xampp/htdocs/sablona/php/footer.php';*/ ?>
<script src="js/accordion.js"></script>
<script src="js/menu.js"></script>
</body>
</html>