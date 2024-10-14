<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Trailer Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Acolytes of Ash</h2>
    <div class="container">

        <?php
        require 'VideoAbstract.php';
        require 'AllVideos.php';

        $videos = [
            new AllVideos('THE STRANGERS', '<iframe src="https://www.youtube.com/embed/zyRULBtS_GA?si=eT-2uM9IyPrhf1cw" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('TERRIFIER 2', '<iframe src="https://www.youtube.com/embed/mXWZQBVc1V4?si=LTSBSWn-7szz1IU3" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('Smile', '<iframe src="https://www.youtube.com/embed/BcDK7lkzzsU?si=NRUWXxo-6PTo9z_x" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('No One Gets Out Alive', '<iframe src="https://www.youtube.com/embed/sY2TLiK27g4?si=z7lfTRgVlkKOJzPf" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('The Strays', '<iframe src="https://www.youtube.com/embed/o9_UteTT9wA?si=9ulg_z4xzpJHx6gZ" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('BARBARIAN', '<iframe src="https://www.youtube.com/embed/Dr89pmKrqkI?si=BX_cQuZeicEwXqkX" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('Night Swim', '<iframe src="https://www.youtube.com/embed/pcSNqteCEtE?si=-shNL_rs7AuZnc-u" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('Talk To Me', '<iframe src="https://www.youtube.com/embed/aLAKJu9aJys?si=cQV2csYHacn0x4oY" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('Sister Death', '<iframe src="https://www.youtube.com/embed/Ze6plKbzkY0?si=tqUXWGQgEhgD84Mi" title="YouTube video player" allowfullscreen></iframe>', 'YouTube'),
            new AllVideos('Hypnotic', '<iframe src="https://www.youtube.com/embed/eHsWYmnXk1o?si=kdfPDInWPu2P50yP" title="YouTube video player" allowfullscreen></iframe>', 'YouTube')
        ];

        foreach ($videos as $video) {
            echo '<div class="YTVideo">';
            echo '<h2>' . $video->getTitel() . '</h2>';
            echo '<p>Quelle: ' . $video->getQuelle() . '</p>';
            echo $video->getEmbettet();
            echo '</div>';
        }

        ?>

    </div>

</body>
</html>