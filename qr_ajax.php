<?php
/**
 * REDCap External Module: QR Code Links
 * @author Luke Stevens, Murdoch Children's Research Institute
 */
error_reporting(0);
if (is_null($module) || !($module instanceof MCRI\QRCodeLinks\QRCodeLinks)) { exit(); }
require_once APP_PATH_LIBRARIES . "phpqrcode/qrlib.php";
$url = urldecode($_GET['url']);
\QRcode::png($url, false, 'H', 3);