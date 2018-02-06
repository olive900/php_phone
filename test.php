<?php


include 'geo_lib/phone_geo.php';

$ret = GeoPhone::find($_POST["phone"]);


print_r( $ret );

