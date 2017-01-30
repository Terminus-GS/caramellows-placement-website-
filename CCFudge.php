<?php
include('header.php');
?>

    <body>
        <div class="row">
            <div class="small-12 columns">
                <div>
                    <h5 class="shopTitle">Popular</h5> </div>
            </div>
        </div>
        <div class="row">
            <div class="small-2 columns caraCata">
                <div class="catagories" id="cataOverlay"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div id="overlayMenu">
                        <ul class="side-nav" role="navigation" title="Link List">
                            <li role="menuitem"><h5 class="cataTitle">Caramellows Catagories</h5></li>
                            <li role="menuitem"><a href="CCShop.php">Popular</a>
                                <li role="menuitem"><a href="CCBM.php">Brownies & Flapjacks</a></li>
                                <li role="menuitem"><a href="CCCP.php">Candy Pops</a></li>
                                <li role="menuitem"><a href="CCCD.php">Cheesecakes & Desserts</a>
                                    <li role="menuitem"><a href="CCFudge.php">Fudge</a></li>
                                    <li role="menuitem"><a href="CCHS.php">Holiday Specials</a></li>
                                    <li role="menuitem"><a href="CCMuffins.php">Muffins</a></li>
                                    <li role="menuitem"><a href="CCOS.php">Old-School</a></li>
                                    <li role="menuitem"><a href="CCPopcorn.php">Popcorn</a></li>
                                    <li role="menuitem"><a href="CSalads.php">Salads</a></li>
                                    <li role="menuitem"><a href="CCTC.php">Truffles & Chocolates</a></li>
                        </ul>
                    </div>
                </div>
                <button class="openBtn" onclick="openNav()">
                    <p class="cataT">Catagories</p>
                    <div class="try"></div>
                    <div class="try"></div>
                    <div class="try"></div>
                </button>
                <script>
                    function openNav() {
                        document.getElementById("cataOverlay").style.width = "100%";
                    }

                    function closeNav() {
                        document.getElementById("cataOverlay").style.width = "0%";
                    }
                </script>
            </div>
            <div class="small-2 columns productRow" style="margin-left: 10px;">
                <div class="shopImg"> <img src="images/toffecreamtart.jpg" s />
                    <label>Brownies</label>
                    <div class="price">
                        <p>Bag: £2 </br> Tray: £8</p>
                    </div>
                </div>
            </div>
            <div class="small-2 columns productRow" style="margin-left: 10px;">
                <div class="shopImg"> <img src="images/brownies.jpg" />
                    <label>Brownies</label>
                    <div class="price">
                        <p>Bag: £2 </br> Tray: £8</p>
                    </div>
                </div>
            </div>
            <div class="small-2 columns productRow" style="margin-left: 10px;">
                <div class="shopImg"> <img src="images/fudge%20box.jpg" />
                    <label>Brownies</label>
                    <div class="price">
                        <p>Bag: £2 </br> Tray: £8</p>
                    </div>
                </div>
            </div>
            <div class="small-2 columns productRow" style="margin-left: 10px;">
                <div class="shopImg"> <img src="images/kindercake.jpg" />
                    <label>Brownies</label>
                    <div class="price">
                        <p>Bag: £2 </br> Tray: £8</p>
                    </div>
                </div>
            </div>
            <div class="small-2 columns"> </div>
        </div>
        <div class="row productRow">
            <div class="small-2 columns">
                <p></p>
            </div>
            <div class="small-2 columns" style="margin-left: 10px;">
                <div class="shopImg"> <img src="images/brownies.jpg" />
                    <label>Brownies</label>
                    <div class="price">
                        <p>Bag: £2 </br> Tray: £8</p>
                    </div>
                </div>
            </div>
            <div class="small-8 columns">
                <p></p>
            </div>
            <!--<div class="small-2 columns" style="margin-left: 10px;">
                <div class="shopImg"> <img src="images/brownies.jpg" />
                    <label>Brownies</label>
                    <div class="price">
                        <p>Bag: £2 </br> Tray: £8</p>
                    </div>
                </div>
            </div>
            <div class="small-2 columns" style="margin-left: 10px;">
                <div class="shopImg"> <img src="images/brownies.jpg" />
                    <label>Brownies</label>
                    <div class="price">
                        <p>Bag: £2 </br> Tray: £8</p>
                    </div>
                </div>
            </div>
            <div class="small-2 columns" style="margin-left: 10px;">
                <div class="shopImg"> <img src="images/brownies.jpg" />
                    <label>Brownies</label>
                    <div class="price">
                        <p>Bag: £2 </br> Tray: £8</p>
                    </div>
                </div>
            </div>
            <div class="small-2 columns"> </div>--></div>
        <!--Mobile-->
        <div class="row mobileRow">
            <div class="small-4 columns" style="margin-left: 10px; margin-top: 15px; position: relative;
left: 15%;">
                <div class="shopImg"> <img src="images/toffecreamtart.jpg" s /> </div>
            </div>
            <div class="small-7 columns descRow">
                <label>Brownies</label>
                <div class="price">
                    <p>Bag: £2 </br> Tray: £8</p>
                </div>
            </div>
        </div>
        <div class="row mobileRow">
            <div class="small-4 columns" style="margin-left: 10px; margin-top: 15px; position: relative;
left: 15%;">
                <div class="shopImg"> <img src="images/brownies.jpg" s /> </div>
            </div>
            <div class="small-7 columns descRow">
                <label>Brownies</label>
                <div class="price">
                    <p>Bag: £2 </br> Tray: £8</p>
                </div>
            </div>
        </div>
        <div class="row mobileRow">
            <div class="small-4 columns" style="margin-left: 10px; margin-top: 15px; position: relative;
left: 15%;">
                <div class="shopImg"> <img src="images/fudge%20box.jpg" s /> </div>
            </div>
            <div class="small-7 columns descRow">
                <label>Brownies</label>
                <div class="price">
                    <p>Bag: £2 </br> Tray: £8</p>
                </div>
            </div>
        </div>
        <div class="row mobileRow">
            <div class="small-4 columns" style="margin-left: 10px; margin-top: 15px; position: relative;
left: 15%;">
                <div class="shopImg"> <img src="images/kindercake.jpg" s /> </div>
            </div>
            <div class="small-7 columns descRow">
                <label>Brownies</label>
                <div class="price">
                    <p>Bag: £2 </br> Tray: £8</p>
                </div>
            </div>
        </div>
        <div class="row mobileRow">
            <div class="small-4 columns" style="margin-left: 10px; margin-top: 15px;position: relative;
left: 15%;">
                <div class="shopImg"> <img src="images/toffecreamtart.jpg" s /> </div>
            </div>
            <div class="small-7 columns descRow">
                <label>Brownies</label>
                <div class="price">
                    <p>Bag: £2 </br> Tray: £8</p>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation/foundation.offcanvas.min.js">
        </script>
        <script>
            $(document).foundation();
        </script>
    </body>
    <?php
include('footer.php');
?>