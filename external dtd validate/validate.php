<?php
$xml = new DomDocument;
$xml->load('customer.xml');
if ($xml->validate())
    echo "It is a valid document";
else
    echo "It is not a valid document";
?>