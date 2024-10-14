<?php
require_once 'InterfaceVideo.php';

class AllVideos implements InterfaceVideo
{
    private $titel;
    private $einbetten;

    public function __construct($titel, $einbetten)
    {
        $this->titel = $titel;
        $this->einbetten = $einbetten;
    }

    public function getTitel()
    {
        return $this->titel;
    }
    
    public function getQuelle()
    {
        return 'YouTube';
    }

    public function getEmbettet()
    {
        return $this->einbetten;
    }
}
