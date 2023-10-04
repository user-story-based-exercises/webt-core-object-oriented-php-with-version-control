<?php

namespace src;

require_once "InterfaceVideo.php";

abstract class AbstractVideo implements InterfaceVideo{
    protected string $title;
    protected string $origin;       
     //kann von vererbter klasse zugegriffen werden nicht von normaler anderer
    protected string $id;

    /**
     * @param string $title
     * @param string $origin     //generiert automatisch dokumentation aus kommentar (dokumentation von code)
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
    //klasse von der keine instanz möglich ist, man muss hier eine extended klasse nehmen
}