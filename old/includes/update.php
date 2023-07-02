<?php

if (!file_exists("../cache")) mkdir("../cache");

$data = json_decode(file_get_contents("https://equestria.dev/projects.php"), true);
file_put_contents("../cache/projects.json", json_encode($data));

foreach ($data as $index => $project) {
    if (str_starts_with($project["icon"], "/")) {
        file_put_contents("../cache/" . $index . ".png", file_get_contents("https://equestria.dev/" . $project["icon"]));
    } else {
        file_put_contents("../cache/" . $index . ".png", file_get_contents($project["icon"]));
    }
}