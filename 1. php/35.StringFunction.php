<?php

var_dump(join(",", [1, 2, 3, 4, 5]));

var_dump(implode("-", [1, 2, 3, 4, 5]));

var_dump(explode(" ", "Alfian Putra Yulianto"));

var_dump(strtolower("ALFIAN YULIANTO"));

var_dump(strtoupper("alfian yulianto"));

// trim untuk menghapus whitespace di depan dan di belakang
var_dump(trim("     Alfian      "));

var_dump(substr("Alfian Yulianto", 2, 5)); // fian
