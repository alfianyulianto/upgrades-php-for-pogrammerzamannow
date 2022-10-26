<?php
$data = [
  "action" => "Create",
];

// if (isset($data["action"])) {
//   $action = $data["action"];
// } else {
//   $action = "Nothing";
// }

// Sytax Null Coalescing Operator
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;
