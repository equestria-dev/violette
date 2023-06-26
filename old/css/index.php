<?php

header("Content-Type: text/css");
$text = "";

$files = array_filter(scandir($_SERVER['DOCUMENT_ROOT'] . "/css"), function ($i) {
    return str_ends_with($i, ".css");
});

foreach ($files as $file) {
    $text .= "\n" . file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/css/" . $file);
}

die($text);