<?php

header("Content-Type: application/javascript");
$text = "";

$files = array_filter(scandir($_SERVER['DOCUMENT_ROOT'] . "/js"), function ($i) {
    return str_ends_with($i, ".js");
});

foreach ($files as $file) {
    $text .= "\n" . file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/js/" . $file);
}

die($text);