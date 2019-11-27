<?php

abstract class Visitee
{
    abstract function accept(Visitor $visitor_in);
}

class BookVisitee extends Visitee
{
    private $author;
    private $title;

    function __construct($title_in, $author_in)
    {
        $this->author = $author_in;
        $this->title  = $title_in;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }

    function accept(Visitor $visitor_in)
    {
        $visitor_in->visitBook($this);
    }
}

class SoftwareVisitee extends Visitee
{
    private $title;
    private $softwareCompany;
    private $softwareCompanyURL;

    function __construct($title_in, $softwareCompany_in, $softwareCompanyURL_in)
    {
        $this->title = $title_in;
        $this->softwareCompany = $softwareCompany_in;
        $this->softwareCompanyURL = $softwareCompanyURL_in;
    }

    function getSoftwareCompany()
    {
        return $this->softwareCompany;
    }

    function getSoftwareCompanyURL()
    {
        return $this->softwareCompanyURL;
    }

    function getTitle()
    {
        return $this->title;
    }

    function accept(Visitor $visitor_in)
    {
        $visitor_in->visitSoftware($this);
    }
}

abstract class Visitor
{
    abstract function visitBook(BookVisitee $bookVisitee_in);
    abstract function visitSoftware(SoftwareVisitee $softwareVisitee_in);
}

class  PlainDescriptionVisitor extends Visitor
{
    private $description = NULL;

    function getDescription()
    {
        return $this->description;
    }
    
    function setDescription($descriptionIn)
    {
        $this->description = $descriptionIn;
    }

    function visitBook(BookVisitee $bookVisiteeIn)
    {
        $this->setDescription($bookVisiteeIn->getTitle() . '. written by '. $bookVisiteeIn->getAuthor() );
    }

    function visitSoftware(SoftwareVisitee $softwareVisiteeIn)
    {
        $this->setDescription($softwareVisiteeIn->getTitle().'. made by '. $softwareVisiteeIn->getSoftwareCompany().'. website at '.$softwareVisiteeIn->getSoftwareCompanyURL() );
    }

}

class FancyDescriptionVisitor extends Visitor
{
    private $description = NULL;

    function getDescription()
    {
        return $this->description;
    }

    function setDescription($descriptionIn)
    {
        $this->description = $descriptionIn;
    }

    function visitBook(BookVisitee $bookVisiteeIn)
    {
        $this->setDescription($bookVisiteeIn->getTitle(). '...!*@*! written !*! by !@! '.$bookVisiteeIn->getAuthor() );
    }

    function visitSoftware(SoftwareVisitee $softwareVisiteeIn)
    {
        $this->setDescription($softwareVisiteeIn->getTitle(). '...!!! made !*! by !@!'. $softwareVisiteeIn->getSoftwareCompany().'...www website !***! at http://'.$softwareVisiteeIn->getSoftwareCompanyURL() );
    }
}
writeln('BEGIN TESTING VISITOR PATTERN');
writeln('');

$book = new BookVisitee('PHP DESIGN PATTERN', 'TRIA BAGUS');
$software = new SoftwareVisitee('PHP', 'PHP Company', 'www.php.com');

$plainVisitor = new PlainDescriptionVisitor();

acceptVisitor($book, $plainVisitor);
writeln('rencana deskripsi buku: '.$plainVisitor->getDescription() );
acceptVisitor($software,$plainVisitor);
writeln('rencana deskripsi software: '.$plainVisitor->getDescription() );
writeln('');
writeln('');

$fancyVisitor = new FancyDescriptionVisitor();

acceptVisitor($book, $fancyVisitor);
writeln('fancy deskripsi buku: '.$fancyVisitor->getDescription() );
acceptVisitor($software, $fancyVisitor);
writeln('fancy deskripsi software: '.$fancyVisitor->getDescription() );
writeln('');


writeln('END TESTING VISITOR PATTERN');

//kirim dua kali setiap pengunjung dan objek yang dikunjungi
function acceptVisitor(Visitee $visitee_in, Visitor $visitor_in)
{
    $visitee_in->accept($visitor_in);
}

function writeln($line_in) {
    echo $line_in."<br/>";
}