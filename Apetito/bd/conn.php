<?php
$connn = new mysqli("localhost","root","","apetito",3307);
$connn->set_charset("utf8");
if ($connn->connect_error) {
    die("Error de conecion: " . $connn->connect_error);
}
