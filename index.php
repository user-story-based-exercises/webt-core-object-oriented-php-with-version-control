<?php


/*Instanzen "YouTubeVideo" und "VimeoVideo" werden erstellt*/
require_once "./VimeoVideo.php";
require_once  "./YouTubeVideo.php";
require_once  "./AbstractVideo.php";

$youtubeVideo = new YouTubeVideo("ANv5UfZsvZQ");
$vimeoVideo = new VimeoVideo("867338027");

echo "<h2>YouTube Videos:</h2><br>";

/*Methode "getEmbedCode" für diese Instanzen aufrufen, um die Einbettungscodes für die Videos auszugeben.*/

echo $youtubeVideo->getEmbedCode();
echo $youtubeVideo->getEmbedCode();
echo $youtubeVideo->getEmbedCode();
echo $youtubeVideo->getEmbedCode();
echo $youtubeVideo->getEmbedCode();
echo "<br><h2>Vimeo Videos:</h2><br>";
echo $vimeoVideo->getEmbedCode();
echo $vimeoVideo->getEmbedCode();
echo $vimeoVideo->getEmbedCode();
echo $vimeoVideo->getEmbedCode();
echo $vimeoVideo->getEmbedCode();