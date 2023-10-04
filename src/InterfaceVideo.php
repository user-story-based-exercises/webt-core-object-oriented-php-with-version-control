<?php

namespace src;

interface InterfaceVideo {       
    //interface hat functions die man in anderen klassen implementieren kann
    function getTitle(): string;
    function getOrigin(): string;
    function getIFrame(): string;
}