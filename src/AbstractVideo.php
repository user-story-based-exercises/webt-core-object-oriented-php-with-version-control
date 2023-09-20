<?php

require_once "InterfaceVideo.php";

abstract class AbstractVideo implements InterfaceVideo{
    protected string $title;
    protected string $origin;
    protected string $id;

    /**
     * @param string $title
     * @param string $origin
     * @param string $id
     */
    public function __construct(string $title, string $origin, string $id)
    {
        $this->title = $title;
        $this->origin = $origin;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return "from " . $this->origin;
    }

    /**
     * @return string
     */
    abstract public function getIFrame(): string;
}