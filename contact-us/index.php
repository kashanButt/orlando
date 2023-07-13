<?php

$settings = include_once '../settings.php';
$site_name = $settings["site"]["site_name"];
$base_url = $settings["site"]["base_url"];
$file_url = $settings["site"]["file_url"];
$img_url = $settings["assets"]["images"];

include_once '../partials/header.php';
?>

<?php include_once '../partials/footer.php'; ?>