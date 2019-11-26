<?php

class BookReader
{
    private $title;
    private $page;

    function __construct($title_in, $page_in)
    {
        $this->setPage($page_in);
        $this->setTitle($title_in);
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page_in)
    {
        $this->page = $page_in;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}

class BookMark
{
    private $title;
    private $page;

    function __construct(BookReader $bookReader)
    {
        $this->setPage($bookReader);
        $this->setTitle($bookReader);
    }

    public function getPage(BookReader $bookReader)
    {
        $bookReader->setPage($this->page);
    }

    public function setPage(BookReader $bookReader)
    {
        $this->page = $bookReader->getPage();
    }
    
    public function getTitle(BookReader $bookReader)
    {
        $bookReader->setTitle($this->title);
    }

    public function setTitle(BookReader $bookReader)
    {
        $this->title = $bookReader->getTitle();
    }
} 

//Client
writeln('BEGIN TESTING MEMENTO PATTERN');
writeln('');

$bookReader = new BookReader('PHP Programming', '103');
$bookMark   = new BookMark($bookReader);

writeln('(di awal) bookReader title: '.$bookReader->getTitle());
writeln('(di awal) bookReader page: '.$bookReader->getPage());

$bookReader->setPage("104");
$bookMark->setPage($bookReader);
writeln('(satu halaman kemudian) bookReader page: '.$bookReader->getPage());  

$bookReader->setPage('2005');  //oops! a typo
writeln('(setelah typo) bookReader page: '.$bookReader->getPage()); 

$bookMark->getPage($bookReader);
writeln('(kembali ke satu halaman kemudian) bookReader page: '.$bookReader->getPage());    
writeln('');

writeln('END TESTING MEMENTO PATTERN');
function writeln($line_in) {
    echo $line_in."<br/>";
}