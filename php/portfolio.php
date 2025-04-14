
<?php include_once "parts/head.php"?>
    <body>
    <?php 
$file_path1 = 'C:/xampp/htdocs/sablona/php/parts/header.php'; 
if(!require($file_path1)){
  echo"Failed to include $file_path1";
}?>

        <main>
            <section class="banner">
                <div class="container text-white">
                    <h1>Portfólio</h1>
                </div>
            </section>
              <section class="container">
               <?php finishPortfolio();
               ?>
            </section>   

        </main>
        <?php
$file_path = "C:/xampp/htdocs/sablona/php/parts/footer.php";
if(!include($file_path)){
  echo"Failed to include $file_path";
} /*include 'C:/xampp/htdocs/sablona/php/footer.php';*/ ?>
    <script src="js/menu.js"></script>
    </body>
</html>