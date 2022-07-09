<?php
// Prepare File
$folder = $_GET["folder_structure"];
$file = tempnam("tmp", "zip");
$zip = new ZipArchive();
$zip->open($file, ZipArchive::OVERWRITE);

// Stuff with content
foreach (glob("../$folder/*.php") as $file1) { /* Add appropriate path to read content of zip */
  $zip->addFile($file1);
}
// Close and send to users
$zip->close();
ob_clean();
ob_end_clean();
header('Content-Type: application/zip');
header('Content-Length: ' . filesize($file). "\\n");
header('Content-Disposition: attachment; filename="file.zip"');
readfile($file);
unlink($file);
exit();

?>