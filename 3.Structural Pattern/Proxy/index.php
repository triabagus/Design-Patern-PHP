<?php

interface instructureVideo
{
    function play();
}

class Video implements instructureVideo
{
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function play()
    {
        echo "Playing ". $this->title. " video";
    }
}

class VideoProxy implements instructureVideo
{
    private $video;
    private $title;

    public function __construct($str)
    {
        $this->title = $str;
    }

    public function play()
    {
        if($this->video == null) $this->video = new Video($this->title);
        $this->video->play();
    }
}

$object = new VideoProxy("Avenger");
$object->play();