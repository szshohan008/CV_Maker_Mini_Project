<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?php
$file = './pdf/cv.pdf';
$filename = 'cv.pdf';

header("location: data.php");
//header("location: cv.pdf");
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>
</body>
</html>