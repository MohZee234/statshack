<?php
include 'header.php';
//select all the films
include 'destinationquery.php';
?>

<!doctype html>
<html lang="en">
<head>
    <title>avianAdventures | Flights To</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>

<div id="pageBanner" class="flex-center" style="background-image: url('./images/Large-Flights-hero-2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Flights To</h1>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--pageBanner-->

<div class="layer text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">Flights To</h2>
                <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci fugiat itaque laborum modi totam! Excepturi?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A hic illo iusto maiores, molestias non similique, sit tempore ullam velit veniam veritatis voluptates? Beatae doloremque libero quaerat quis ratione? Voluptatum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad amet architecto blanditiis debitis eius est eum, fugiat illo impedit ipsam iste iure laborum necessitatibus nesciunt nostrum nulla officiis pariatur perspiciatis possimus quae, quis quo, unde vel veniam vitae voluptas!</p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->

<div class="layer grey" id="flightsLists">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 layer-title">
                <h2 class="title">Flights To</h2>
                <p>Check through all our flights going to;</p>
            </div><!--col-->
            <?php

            //loop over the array of films
            foreach ($flights as $flight) { ?>
                <div class="col-lg-4 text-center">
                    <?php echo "<a href='details.php?id={$flight["id"]}'>"; ?>
                    <div class="iconBox">
                        <div class="overlay"></div>
                        <div class="z-container">
                            <i class="fal fa-plane"></i>
                            <h5><?php echo "{$flight["name"]}"; ?></h5>
                        </div>
                    </div><!--iconBox-->
                    </a>
                </div><!--col-->
            <?php }
            ?>
        </div><!--row-->
    </div><!--container-->
</div><!--layer-->

<?php

include 'footer.php';

?>

</body>
</html>
