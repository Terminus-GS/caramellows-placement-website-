<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr", ng-app="mod">

<head>
    <meta charset="UTF-8" />
    <title>Caramellows</title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/CCcss.css" />
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans">
    
    <script type="text/javascript" src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular.min.js"></script>
    <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    </head>
<header id="page-header">
    
    <div class="row">
        <div class="small-12 columns">
            <img class="ccimg" img src="images/caramellows.png" alt="Caramellows Candy">
            <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
                <button class="menu-icon dark" type="button" onclick="myFunction()" data-toggle="menu-fade" aria-controls="menu-fade"></button>            
            </div>
            <div class="top-bar" id="menu-fade" data-animate="fade-in fade-out" data-toggler data-animate="fade-in fade-out" aria-expanded="false">
                <div class="top-bar-left">
                    <ul class="dropdown menu" data-dropdown-menu>
                        <ul class="vertical medium-horizontal menu">
                             <li class="is-dropdown-submenu-parent">
                            <li><a href="#">Home</a></li>
                            <li><a href="CCShop.php">Shop</a></li>
                            <li><a href="CCAbout.html">About</a></li>
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Contact</a></li>
                            </li>
                        </ul>                       
                    </ul>
                </div>
            </div> 
        </div>
    </div>
<!--<script type="text/javascript">
    $(".menu-icon").click(function () {
    $(".overlay").show();
});
</script>-->

</header>