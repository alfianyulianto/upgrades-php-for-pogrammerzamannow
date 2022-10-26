<?php

$data = "Alfian";

var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_float($data));
var_dump(is_null($data));
var_dump(is_numeric($data));
var_dump(is_array($data));

$func = function () {
  return "OK";
};
var_dump(is_callable($func));
