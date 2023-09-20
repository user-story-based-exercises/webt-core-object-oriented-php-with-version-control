<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CryptTube</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <div class="header">
    <h1>CryptTube</h1>
    </div>
        <main>
            <?php

            require_once "src/YouTubeVideo.php";
         

            $Videos = [
                new YouTubeVideo("The Visit - Official Trailer (HD)", "YfQnRjkuvaY"),
                new YouTubeVideo("M3GAN - offical trailer", "BRb4U99OU80"),
                new YouTubeVideo("The Ring (2002) Theatrical Trailer", "yybjV3U68wc"),
                new YouTubeVideo("Terrifier Official Trailer", "fN5j1MtGO2Q"),
                new YouTubeVideo("IT - Official Trailer 1", "xKJmEC5ieOk"),
                
            ];

            foreach ($Videos as $video) {
                echo "<section><h2>" . $video->getTitle() . "</h2><p>" . $video->getOrigin() . "</p>" . $video->getIFrame() . "</section>";
            }

            ?>
        </main>
    </body>
</html>


