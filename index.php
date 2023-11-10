<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang) {
    case "de":
        readfile("index_de.html");
        break;
    default:
        readfile("index.html");
        break;
}
?>