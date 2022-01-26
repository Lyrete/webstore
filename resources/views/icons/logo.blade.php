<?php
// Instantiate new DOMDocument object
$svg = new DOMDocument();
// Load SVG file from public folder
$svg->load(public_path('img/tomozon.svg'));
// Add CSS class (you can omit this line)
$svg->documentElement->setAttribute("class", "logo");
//Set height
$svg->documentElement->setAttribute("height", "50px");
// Echo XML without version element
echo $svg->saveXML($svg->documentElement);
?>