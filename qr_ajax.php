<?php
/**
 * REDCap External Module: QR Code Links
 * @author Luke Stevens, Murdoch Children's Research Institute
 */
error_reporting(0);
if (is_null($module) || !($module instanceof MCRI\QRCodeLinks\QRCodeLinks)) { exit(); }
if (file_exists(APP_PATH_LIBRARIES . "phpqrcode/qrlib.php")) {
    require_once APP_PATH_LIBRARIES . "phpqrcode/qrlib.php";
}
else if (file_exists(APP_PATH_LIBRARIES . "phpqrcode/lib/full/qrlib.php")) {
    require_once APP_PATH_LIBRARIES . "phpqrcode/lib/full/qrlib.php";
}
else {
    $module->log("Failed to load REDCap's QR library.");
    exit();
}
$url = urldecode($_GET['url']);
\QRcode::png($url, false, 'H', 3);