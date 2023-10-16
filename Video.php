<?php
require "VideoInterface.php";

abstract class Video implements VideoInterface
{
    protected $name;
    protected $source;



    public function __construct($name, $source)
    {
        $this->name = $name;
        $this->source = $source;
    }


    public function getName() : string{
        return $this->name;
    }


    public function getSource() : string{
        return $this->source;
    }
}

class YouTube extends Video{
    public function __construct($name, $source)
    {
        parent::__construct($name, "YouTube");
        $this->source = $source;

    }
    public function getEmbedCode() : string
    {
        return '<iframe width="560" height="315" src="' . $this->source . '"
            title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>';
    }
}

class Vimeo extends video{
    protected $source;
    public function __construct($name, $source)
    {
        parent::__construct($name, "Vimeo");
        $this->source = $source;

    }
    public function getEmbedCode() : string
    {
        return '<iframe width="560" height="315" src="' . $this->source . '"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>';
    }
}

