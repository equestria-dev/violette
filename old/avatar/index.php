<?php

$email = "raindrops@equestria.dev";
header("Content-Type: image/png");

die(file_get_contents("https://www.gravatar.com/avatar/" . md5($email) . "?s=200&d=" . urlencode("https://ponies.equestria.horse/assets/avatars/7d9f543ef74240f69d0786c3f2983124.webp")));