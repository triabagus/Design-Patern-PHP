<?php

class BookCommandee
{
    private $author;
    private $title;

    function __construct($title_in, $author_in)
    {
        $this->setAuthor($author_in);
        $this->setTitle($title_in);
    }

    function getAuthor()
    {
        return $this->author;
    }

    function setAuthor($author_in)
    {
        $this->author = $author_in;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setTitle($title_in)
    {
        $this->title = $title_in;
    }

    function setStarsOn()
    {
        $this->setAuthor(Str_replace(' ', '*', $this->getAuthor() ));
        $this->setTitle(Str_replace(' ', '*', $this->getTitle() ));
    }

    function setStarsOff()
    {
        $this->setAuthor(Str_replace('*', ' ', $this->getAuthor() ));
        $this->setTitle(Str_replace('*', ' ', $this->getTitle() ));
    }

    function getAuthorAndTitle()
    {
        return $this->getTitle().' by '. $this->getAuthor();
    }

}

abstract class BookCommand
{
    protected $bookCommadee;

    function __construct($bookCommadee_in)
    {
        $this->bookCommadee = $bookCommadee_in;
    }

    abstract function  execute();
}

class BookStarsOnCommand extends BookCommand
{
    function execute()
    {
        $this->bookCommadee->setStarsOn();
    }
}

class BookStarsOffCommand extends BookCommand {
    function execute() {
        $this->bookCommadee->setStarsOff();
    }
}


writeln('BEGIN TESTING COMMAND PATTERN');
writeln('');

$book = new BookCommandee('Desain Pattern', 'Tria Bagus');
writeln('buku setelah penciptaan:');
writeln($book->getAuthorAndTitle());
writeln('');

$starsOn = new BookStarsOnCommand($book);
callCommand($starsOn);
writeln('pesan setelah bintang di on:');
writeln($book->getAuthorAndTitle());
writeln('');

$starsOff = new BookStarsOffCommand($book);
callCommand($starsOff);
writeln('pesan setelah bintang di off:');
writeln($book->getAuthorAndTitle());
writeln('');

writeln('END TESTING COMMAND PATTERN');
// fungsi callCommand menunjukkan bahwa ditentukan
// fungsi di BookCommandee hanya dapat dijalankan dengan
// contoh dari BookCommand.

function callCommand(BookCommand $bookCommand_in) {
    $bookCommand_in->execute();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}