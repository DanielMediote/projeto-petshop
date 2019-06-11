<?php
function __autoload($classname) {
    $filename = "./controller/". $classname .".class.php";
    include_once($filename);
}
?>