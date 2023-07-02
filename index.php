<?php

$coldhaze = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/coldhaze.json"), true);

?>

<!doctype html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hi there! We are Raindrops. We are a plural system of <?= $coldhaze["count"] ?> ponies. We use she/pony pronouns. Learn more about us.">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raindrops</title>
    <link rel="icon" href="https://ponies.equestria.horse/assets/avatars/7d9f543ef74240f69d0786c3f2983124.webp" type="image/webp">
    <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <script src="/assets/bootstrap.bundle.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://raindrops.equestria.horse",
            "logo": "https://ponies.equestria.horse/assets/avatars/7d9f543ef74240f69d0786c3f2983124.webp"
        }
    </script>
    <style>
        @media (max-width: 767px) {
            #main-grid {
                grid-template-columns: 1fr !important;
            }

            #likes-grid {
                grid-template-columns: 1fr 1fr !important;
                grid-row-gap: 20px;
            }

            #contacts {
                grid-template-columns: 1fr !important;
                grid-row-gap: 20px;
            }
        }

        .modal {
            backdrop-filter: blur(20px);
        }

        .link {
            cursor: pointer;
        }

        .link:hover {
            opacity: .75;
        }

        .link:active {
            opacity: .5;
        }

        .action-link {
            color: black !important;
            text-decoration: none;
            transition: transform 100ms;
        }

        .action-link:hover {
            transform: scale(1.05);
        }

        .action-link:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body style="background-image: url('/assets/bg.webp'); background-size: cover; background-position: center; background-attachment: fixed; display: flex; align-items: center; height: 100%; background-color: #1a242c; overflow: hidden; margin: 0 20px;">
    <script>
        if (document.createElement("canvas").getContext("webgl") === null) {
            let style = document.createElement("style");
            style.innerText = "* { backdrop-filter: none !important; } #box { background-color: rgb(245,245,245) !important; }";
            document.head.appendChild(style);
        }
    </script>

    <div style="margin-left: auto; margin-right: auto; padding: 2px; background-image: linear-gradient(119deg, rgba(216,53,124,.5) 0%, rgba(227,65,55,.5) 7%, rgba(231,155,96,.5) 14%, rgba(223,191,78,.5) 21%, rgba(203,207,117,.5) 28%, rgba(108,224,154,.5) 35%, rgba(106,228,205,.5) 42%, rgba(100,217,234,.5) 49%, rgba(83,182,238,.5) 56%, rgba(74,158,234,.5) 63%, rgba(164,137,238,.5) 70%, rgba(211,142,240,.5) 77%, rgba(230,122,238,.5) 84%, rgba(227,113,196,.5) 91%); border-radius: 20px;">
        <main id="box" class="container" style="width: 100%; background-color: rgba(245,245,245,0.75); padding: 20px; border-radius: 20px; text-align: center; backdrop-filter: blur(20px); max-height: 75vh; overflow: auto;">
            <div style="display: grid; grid-template-columns: max-content 1fr; width: max-content; margin: 0 auto;" id="main-grid">
                <div style="display: flex; align-items: center; justify-content: center;">
                    <div>
                        <img alt="Sunny Starscout from My Little Pony flying with holographic wings and a holographic horn, looking towards the left." aria-label="Sunny Starscout from My Little Pony flying with holographic wings and a holographic horn, looking towards the left." src="/assets/pony.gif" style="image-rendering: pixelated; width: 128px; height: 150px;" loading="lazy">
                    </div>
                </div>
                <div style="display: flex; align-items: center; justify-content: center;">
                    <div>
                        <h1>Hi there! We are Raindrops</h1>
                    </div>
                </div>
            </div>

            <p>We are a plural system of <?= $coldhaze["count"] ?> ponies. We use <a href="https://en.pronouns.page/@raindropssys" target="_blank" class="link" style="color: black;" tabindex="0"><b>she/pony</b></a> pronouns.</p>

            <div class="heads" style="display: grid; grid-template-columns: repeat(<?= count($coldhaze["ponies"]) ?>, 1fr);">
                <?php foreach ($coldhaze["ponies"] as $pony): ?>
                    <div style="display: flex; align-items: end; justify-content: center; overflow: hidden;">
                        <img alt="<?= $pony["label"] ?>" aria-label="<?= $pony["label"] ?>" src="<?= $pony["url"] ?>" style="image-rendering: pixelated; height: 28px;" loading="lazy">
                    </div>
                <?php endforeach; ?>
            </div>

            <hr style="margin-top: 0 !important;">

            <h2 class="h3">We like</h2>
            <div id="likes-grid" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr; margin-top: 20px;">
                <div>
                    <div style="background-color: rgba(0, 0, 0, .1); border-radius: 999px; width: 56px; height: 56px; padding: 8px; margin-left: auto; margin-right: auto; display: flex; align-items: center; justify-content: center;">
                        <img src="/assets/icons/mlp.svg" style="width: 32px;" alt="MY LITTLE PONY™ logo" aria-label="MY LITTLE PONY™ logo">
                    </div>
                    <div style="width: 100%; text-align: center; margin-top: 10px;">My Little Pony</div>
                </div>
                <div>
                    <div style="background-color: rgba(0, 0, 0, .1); border-radius: 999px; width: 56px; height: 56px; padding: 8px; margin-left: auto; margin-right: auto; display: flex; align-items: center; justify-content: center;">
                        <img src="/assets/icons/computers.svg" style="width: 32px;" alt="Computer icon" aria-label="Computer icon">
                    </div>
                    <div style="width: 100%; text-align: center; margin-top: 10px;">Computers</div>
                </div>
                <div>
                    <div style="background-color: rgba(0, 0, 0, .1); border-radius: 999px; width: 56px; height: 56px; padding: 8px; margin-left: auto; margin-right: auto; display: flex; align-items: center; justify-content: center;">
                        <img src="/assets/icons/music.svg" style="width: 32px;" alt="Music icon" aria-label="Music icon">
                    </div>
                    <div style="width: 100%; text-align: center; margin-top: 10px;">Music</div>
                </div>
                <div>
                    <div style="background-color: rgba(0, 0, 0, .1); border-radius: 999px; width: 56px; height: 56px; padding: 8px; margin-left: auto; margin-right: auto; display: flex; align-items: center; justify-content: center;">
                        <img src="/assets/icons/photography.svg" style="width: 32px;" alt="Photography icon" aria-label="Photography icon">
                    </div>
                    <div style="width: 100%; text-align: center; margin-top: 10px;">Photography</div>
                </div>
                <div>
                    <div style="background-color: rgba(0, 0, 0, .1); border-radius: 999px; width: 56px; height: 56px; padding: 8px; margin-left: auto; margin-right: auto; display: flex; align-items: center; justify-content: center;">
                        <img src="/assets/icons/research.svg" style="width: 32px;" alt="Research icon" aria-label="Research icon">
                    </div>
                    <div style="width: 100%; text-align: center; margin-top: 10px;">Research</div>
                </div>
            </div>

            <hr>

            <h2 class="h3">Check out more</h2>
            <div id="contacts" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; grid-gap: 20px; margin-top: 20px;">
                <a tabindex="0" data-bs-toggle="modal" data-bs-target="#modal-contact" href="#modal-contact" class="action-link" style="cursor: pointer; background-color: rgba(0, 0, 0, .1); padding: 20px; border-radius: 10px;">
                    <img src="/assets/icons/contact.svg" alt="Contact icon" aria-label="Contact icon" style="height: 32px;">
                    <span style="vertical-align: middle;">Get in touch with us</span>
                </a>
                <a tabindex="0" href="https://blog.raindrops.equestria.dev" target="_blank" class="action-link" style="cursor: pointer; background-color: rgba(0, 0, 0, .1); padding: 20px; border-radius: 10px;">
                    <img src="/assets/icons/blog.svg" alt="Blog icon" aria-label="Blog icon" style="height: 32px;">
                    <span style="vertical-align: middle;">Visit our blog</span>
                </a>
                <a tabindex="0" href="https://equestria.dev" target="_blank" class="action-link" style="cursor: pointer; background-color: rgba(0, 0, 0, .1); padding: 20px; border-radius: 10px;">
                    <img src="https://equestria.dev/assets/favicon2.svg" alt="Equestria.dev logo" aria-label="Equestria.dev logo" style="height: 32px;">
                    <span style="vertical-align: middle;">Equestria.dev and our projects</span>
                </a>
                <a tabindex="0" href="https://ponies.equestria.horse/raindrops" target="_blank" class="action-link" style="cursor: pointer; background-color: rgba(0, 0, 0, .1); padding: 20px; border-radius: 10px;">
                    <img src="/assets/icons/plural.svg" alt="Plural icon" aria-label="Plural icon" style="height: 32px;">
                    <span style="vertical-align: middle;">More about our plural system</span>
                </a>
            </div>
        </main>
    </div>

    <div style="position: fixed; bottom: 4px; left: 0; right: 0; color: white;">
        <div class="container" style="display: grid; grid-template-columns: max-content 1fr max-content;">
            <div style="display: flex; align-items: center; max-width: 70vw;">
                <div style="text-shadow: 0 0 10px black;">
                    © <?= date('Y') !== "2023" ? "2023-" . date('Y') : date('Y') ?> Equestria.dev Developers. My Little Pony is ™ and © Hasbro, All rights reserved. <a data-bs-toggle="modal" href="#modal-credits" data-bs-target="#modal-credits" style="color: white; text-decoration: underline; text-shadow: 0 0 10px black;" class="link" tabindex="0">Licenses and credits.</a>
                </div>
            </div>
            <div></div>
            <div style="display: flex; align-items: center;">
                <div>
                    <a href="https://equestria.dev" target="_blank" class="link" tabindex="0">
                        <img alt="Equestria.dev" aria-label="Equestria.dev" src="https://equestria.dev/assets/brand/Wordmark/MonoDark/WordmarkMonoDark.svg" style="height: 42px;" loading="lazy">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-contact">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Get in touch with us</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    Modal body..
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-credits">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Licenses and credits</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p>This website is open-source software. The source code used for running it is available on Equestria.dev's Git hosting platform: <a href="https://git.equestria.dev/equestria.dev/violette" target="_blank">https://git.equestria.dev/equestria.dev/violette</a>.</p>

                    <h4>Trademarks</h4>
                    <p>MY LITTLE PONY, the MY LITTLE PONY logo and the "MY LITTLE PONY" name are registered trademarks of Hasbro in the United States and other countries. Equestria.dev is a trademark of Equestria.dev.</p>

                    <h4>Assets credits</h4>
                    <p>The background image used on this website is a screenshot from the movie "My Little Pony: A New Generation" released by Netflix in September 2021, which is © 2021 Hasbro, All rights reserved.</p>
                    <p>The flying Sunny Starscout animation, which is unmodified, is made by Xodok. The original can be found <a href="https://derpibooru.org/images/3059117" target="_blank">on the Derpibooru image board</a>.</p>
                    <p>The icons used on this website are provided by <a href="https://icons8.com" target="_blank">Icons8</a> and Google as part of <a href="https://fonts.google.com/icons" target="_blank">Material Design</a>.</p>

                    <h4>Legal notices</h4>
                    <p>Should any copyright be infringed, please get in touch with us at <a href="raindrops@equestria.dev">raindrops@equestria.dev</a> (mention it is a copyright-related request), and we will proceed as quickly as possible once we have confirmed your identity.</p>
                    <p>For additional details about how Equestria.dev manages copyright and user data, please refer to <a href="https://equestria.horse/legal" target="_blank">the legal portal</a>.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>