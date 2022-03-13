<?php
$query = "SELECT flights.id, flights.destination_id AS destination, airports.name AS name FROM flights
INNER JOIN airports ON flights.destination_id = airports.id";
$resultset = $conn->query($query);
$flights = $resultset->fetchAll();
?>