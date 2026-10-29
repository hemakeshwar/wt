<?php
$x = simplexml_load_file("customer.xml");
foreach ($x->customer as $c) {
    echo "ID: " . $c->id . "<br>";
    echo "Name: " . $c->name . "<br>";
    echo "City: " . $c->city . "<br>";
    echo "Phone: " . $c->phone . "<br><br>";
}
?>