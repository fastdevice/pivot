<?php

// web/index.php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = false;


// Global Error Status
$failedRequest_json = '{
  "success": false,
  "payload": {
    "value1": "",
    "value2": ""
  },
  "error": {
    "code": "",
    "message": ""
  }
}';


// Include API Controllers

include("brg.php");
include("say.php");
include("cid.php");


// -- nothing beyond this point

$app->run();

?>
