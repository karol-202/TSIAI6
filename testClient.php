<html>
<?php
$httpAccept = $_SERVER['HTTP_ACCEPT'];
$types = explode(',', $httpAccept);

echo '<p>Browser accepts: </p><ul>';
foreach ($types as $type) echo '<li>'.$type.'</li>';
echo '</ul>';

$applicationXML = false;
foreach ($types as $type) {
    if (strpos($type, 'application/xml') !== false) $applicationXML = true;
}

if($applicationXML) header('Content-Type: application/xml');
else header('Content-Type: text/html');
?>
</html>
