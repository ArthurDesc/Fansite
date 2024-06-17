<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'rap_verse');

if (!$mysqli) {
            die("Could not connect: " . mysqli_connect_error());
        }
?>