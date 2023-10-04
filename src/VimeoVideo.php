<?php

namespace src;

require_once "AbstractVideo.php";      
//wenn es das nicht hat läuft der code nicht, 
//once= nicht nochmal laden wenns schon geladen wurde

class VimeoVideo extends AbstractVideo {

    public function __construct(string $title, string $id)
    {
        parent::__construct($title, "Vimeo", $id);
    }

    /**
     * @return string
     */
    public function getIFrame(): string {
        return '<iframe src="https://player.vimeo.com/video/' . $this->id . '" width="420" height="237" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
    }

}