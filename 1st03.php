<?php

$genericObject = new stdClass(); //will display {}
$genericObject->version = "0.2.0"; //-> means put-into, will go into the brakets
$genericObject->configurations = []; //create an empty array
$myfirstConfig = new stdClass();
$myfirstConfig->type="pwa-chrome";
$myfirstConfig->request = "launch";
$myfirstConfig->name = "Launch Chrome against localhost";
$myfirstConfig->file = "\${file}";
$myfirstConfig->webRoot = "\${workspaceFolder}";

//$genericObject->configurations = [$myfirstConfig];
array_push($genericObject->configurations,$myfirstConfig);

echo json_encode($genericObject);

?>