<?php
include 'header.php';
$title="display the details for a airport";
include 'detailsqueryz.php';
?>
<body>

<div id="pageBanner" class="flex-center" style="background-image: url('./images/Large-Flights-hero-2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Flight Details for <?php echo $airport_origin['name']; ?></h1>
                <p><a href="browsablelist.php">Return back to flights</a></p>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--pageBanner-->

<div class="layer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="flightDetails">
                <?php

                if($flight){
                    echo "<div><span>Departure date:</span><p>{$flight['departure_date']}</p></div>";
                    echo "<div><span>Departure time:</span><p>{$flight['departure_time']}</p></div>";
                    echo "<div><span>Arrival time:</span><p>{$flight['arrival_time']}</p></div>";
                    echo "<div><span>Arrival date:</span><p>{$flight['arrival_date']}</p></div>";
                }
                else
                {
                    echo "<p>Can't find a flight.</p>";
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php //results + simple validation
include 'detailsvalidationresults.php';
include 'crewmembersresults.php'
?>

<?php //footer
include "footer.php";
?>
</body>


<!-- CREATE -->
