<?php
$x = simplexml_load_file("addressbook.xml");
foreach ($x->person as $p) {
    echo "Name: " . $p->name . "<br>";
    echo "Address: " . $p->address . "<br><br>";
}
?>