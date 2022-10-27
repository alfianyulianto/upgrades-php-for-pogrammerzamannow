<?php

include_once "./data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location(); //error karena abstract kelas tidak bisa kita buat objectnya

$city = new City();
echo $city->name = "Solo";

$province = new Province();

$country = new Country();
