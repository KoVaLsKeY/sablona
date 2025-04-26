<?php include_once "../php/functions.php";
$menu = getMenuData("header");

$theme = $_GET["theme"] ?? "light"; // <-- виправлення?>

<header style="background-color: <?php echo $theme === "dark"? "grey" : "white"; ?>" class="container main-header">
    <div class="logo-holder">
        <a href="<?php echo $menu['home']['path'];?>"> <!-- tu je chyba.
            Z cvičenia 4, slaid 10-13. 
            Nemôžem si dostať do stranky cez menu['name']['path'].
            Ukazuje o chybe, že menu ne ma kluča "name".-->
            <img alt = "img" src="../php/img/portfolio/logo.png" height="40">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
        <li><a href="<?php echo $theme ==="dark" ? "?theme=light" : "?theme=dark"; ?>">Spustit funkciu</a></li>             <?php printMenu($menu);?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>
