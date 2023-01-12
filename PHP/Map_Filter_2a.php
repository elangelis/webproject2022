<?php

require_once "connection.php";

    $User_latitude = $_GET["User_latitude"];
    $User_longitude =$_GET["User_longitude"];

    $hint = "";


    if ($User_latitude == "") {
        foreach($a as $name) {
            if (stristr($q, substr($name, 0, $len))) {
                if ($hint === "") {
                    $hint = $name;
                } else {
                    $hint .= ", $name";
                }
            }
        }
    }
?>
