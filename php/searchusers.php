<?php
require_once "session-check.php";
$templateParams["js"] = array("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", "../javascript/searchusers.js", "../javascript/image.js");
$templateParams["title"] = "Search users";
$templateParams["page"] = "../template/searchusers.html";
require "./base.php";
?>