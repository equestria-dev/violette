<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="/css/">
    <script src="/js/"></script>
    <title>Raindrops</title>
</head>
<body>
    <div class="uni-foreground" id="uni-foreground">
        <div id="uni-foreground-content">
            <div id="uni-foreground-content-avatar-container" class="scroll-animated">
                <img src="/avatar" id="uni-foreground-content-avatar-decoration" alt="">
                <img src="/avatar" id="uni-foreground-content-avatar" alt="">
            </div>
            <h1 id="uni-foreground-content-title">I am Raindrops!</h1>
        </div>
    </div>

    <div class="alt-titles-container">
        <h1 id="uni-foreground-content-title2" class="uni-foreground-title-alt title-hidden">Making software</h1>
        <h1 id="uni-foreground-content-title3" class="uni-foreground-title-alt title-hidden">Equestrian at core</h1>
        <h1 id="uni-foreground-content-title4" class="uni-foreground-title-alt title-hidden">Wanna get in touch?</h1>
    </div>

    <div class="box" id="box-1">
        <div class="box-background scroll-animated" id="box-1-background">
            <div id="box-1-background-cover"></div>
        </div>
    </div>
    <div class="box" id="box-2">
        <div class="box-foreground" id="box-2-foreground">
            <div id="box-2-foreground-projects">
                <?php foreach (json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/cache/projects.json"), true) as $index => $project): ?><img src="/cache/<?= $index ?>.png" class="box-2-foreground-project-icon project-<?= $index ?>"><?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="box" id="box-skip">
        <div class="box-background" id="box-skip-background">
            <div id="box-skip-background-cover"></div>
        </div>
        <div class="box-foreground" id="box-skip-foreground"></div>
    </div>
    <div class="box" id="box-3">
        <div class="box-background" id="box-3-background">
            <div id="box-3-background-cover"></div>
        </div>
        <div class="box-foreground" id="box-3-foreground">
            <img src="/assets/items.png" alt="" id="box-3-foreground-items">
        </div>
    </div>
    <div class="box" id="box-4">
        <div class="box-background" id="box-4-background">
            <div id="box-4-background-cover"></div>
        </div>
        <div class="box-foreground" id="box-4-foreground"></div>
    </div>
</body>
</html>