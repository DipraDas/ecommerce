<?php
$connection = mysqli_connect('localhost', 'root', '', 'mystore');
if (!$connection) {
    die(mysqli_error($connection));
}
