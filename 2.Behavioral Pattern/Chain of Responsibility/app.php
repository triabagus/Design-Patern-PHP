<?php

abstract class AbstractBookTopic
{
    abstract function getTopic();
    abstract function getTitle();
    abstract function setTitle($title_in);
}

class BookTopic extends AbstractBookTopic
{
    private $topic;
    private $title;

    function __construct($topic_in)
    {
        $this->topic = $topic_in;
        $this->title = NULL;
    }

    function getTopic()
    {
        return $this->topic;
    }

    // ini adalah akhir dari rantai - mengembalikan judul atau mengatakan tidak ada

    function getTitle()
    {
        if(NULL != $this->title){
            return $this->title;
        }else{
            return 'tidak ada judul yang tersedia';
        }
    } 

    function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}

class BookSubTopic extends AbstractBookTopic
{
    private $topic;
    private $parentTopic;
    private $title;

    function __construct($topic_in, BookTopic $parentTopic_in)
    {
        $this->topic = $topic_in;
        $this->parentTopic = $parentTopic_in;
        $this->title = NULL;
    }

    function getTopic()
    {
        return $this->topic;
    }

    function getParentTopic()
    {
        return $this->parentTopic;
    }

    function getTitle()
    {
        if(NULL != $this->title){
            return $this->title;
        }else{
            return $this->parentTopic->getTitle();
        }
    }

    function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}

class BookSubSubTopic extends AbstractBookTopic
{
    private $topic;
    private $parentTopic;
    private $title;

    function __construct($topic_in, BookSubTopic $parentTopic_in)
    {
        $this->topic = $topic_in;
        $this->parentTopic = $parentTopic_in;
        $this->title = NULL;
    }

    function getTopic()
    {
        return $this->topic;
    }

    function getParentTopic()
    {
        return $this->parentTopic;
    }

    function getTitle()
    {
        if(NULL != $this->title){
            return $this->title;
        }else{
            return $this->parentTopic->getTitle();
        }
    }

    function setTitle($title_in)
    {
        $this->title = $title_in;
    }

}


writeln("BEGIN TESTING CHAIN OF RESPONSIBILITY PATTERN");
writeln("");

$bookTopic = new BookTopic("PHP 7");
writeln("Buku Topic sebelum judul di ubah:");
writeln("topic : ". $bookTopic->getTopic());
writeln("title : ". $bookTopic->getTitle());
writeln("");

$bookTopic->setTitle("PHP 7 by version");
writeln("Buku Topic setelah judul di ubah:");
writeln("topic : ". $bookTopic->getTopic());
writeln("title : ". $bookTopic->getTitle());
writeln("");

$bookSubTopic = new BookSubTopic("PHP 7 Pattern", $bookTopic);
writeln("Sub Buku Topic sebelum judul di ubah:");
writeln("topic : ". $bookSubTopic->getTopic());
writeln("title : ". $bookSubTopic->getTitle());
writeln("");

$bookSubTopic->setTitle("PHP 7 Pattern by version");
writeln("Sub Buku Topic setelah judul di ubah:");
writeln("topic : ". $bookSubTopic->getTopic());
writeln("title : ". $bookSubTopic->getTitle());
writeln("");

$bookSubSubTopic = new BookSubSubTopic("PHP 5 Pattern for Cats", $bookSubTopic);
writeln("bookSubSubTopic tanpa set judul:");
writeln("topic : ". $bookSubSubTopic->getTopic());
writeln("title : ". $bookSubSubTopic->getTitle());
writeln("");

$bookSubTopic->setTitle(NULL);
writeln ("bookSubSubTopic tanpa judul untuk set untuk bookSubTopic:");
writeln("topic : ". $bookSubSubTopic->getTopic());
writeln("title : ". $bookSubSubTopic->getTitle());
writeln("");

writeln("END TESTING CHAIN OF RESPONSIBILITY PATTERN");
function writeln($line_in) {
    echo $line_in."<br/>";
}