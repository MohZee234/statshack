<?php
include "header.php"; // header

?>
<!DOCTYPE HTML>

<html>
<head>
    <title>Homepage</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>

<div id="hero" class="flex-center" style="background-image: url('./images/walla.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="display:inline-block;border: solid rgba(0,0,0,25%);background:rgba(255, 107, 108, 75%); padding: 3.5px;">Home of Football Data!</h1>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--hero-->
<div id="pltable" class="flex-center"">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:var(--primaryRed);text-align:center;background: whitesmoke;">Current League Table:</h1>

            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--hero-->
<div id="ftmatches" class="flex-center"">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="color:var(--primaryRed);text-align:center;background: whitesmoke;">Featured Matches</h1>

        </div><!--col-->
    </div><!--row-->
</div><!--container-->
</div><!--hero-->



<?php
include "footer.php"; // header ?>

</body>
</html>