<?php

class FlyweightBook
{
    private $author;
    private $title;

    function __construct($author_in, $title_in)
    {
        $this->author   = $author_in;
        $this->title    = $title_in;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}

class FlyweightFactory
{
    private $books = array();

    function __construct()
    {
        $this->books[1] = NULL;
        $this->books[2] = NULL;
        $this->books[3] = NULL;
    }

    function getBook($bookKey)
    {

        if(NULL == $this->books[$bookKey]){
            $makeFunction           = 'makeBook'.$bookKey;
            $this->books[$bookKey]  = $this->$makeFunction(); 
        }

        return $this->books[$bookKey];
    }

    //Agak jauh dari itu, tapi mudah-mudahan mudah diikuti.     
    // Bagaimana Anda benar-benar ingin membuat bobot terbang akan tergantung pada apa     
    // kebutuhan aplikasi Anda. Ini, sementara sedikit terlihat canggung,     
    // berfungsi dengan baik.

    function makeBook1()
    {
        $book = new FlyweightBook('Tria Bagus', 'Design Pattern Book');
        return $book;
    }

    function makeBook2()
    {
        $book = new FlyweightBook('M. Isnul', 'UI Design Book');
        return $book;
    }

    function makeBook3()
    {
        $book = new FlyweightBook('Arizka Aziz', 'Vue JS Book Tutorial');
        return $book;
    }
}

class FlyweightBookShelf
{
    private $books = array();

    function addBook($book)
    {
        $this->books[] = $book;
    }

    function showBooks()
    {
        $return_string = NULL;
        foreach($this->books as $book){
            $return_string .= ' Title: "'.$book->getTitle().'", Author: "'.$book->getAuthor();'"'; 
        };

        return $return_string;
    }
}

/**
 * Testing Flyweight Design Pattern
 */

echo 'Begin Testing Flyweight Design Pattern<br><br>';

$flyweightFactory = new FlyweightFactory();
$flyweightBookShelf1 =  new FlyweightBookShelf();
$flyweightBook1 = $flyweightFactory->getBook(1);
$flyweightBookShelf1->addBook($flyweightBook1);
$flyweightBook2 = $flyweightFactory->getBook(1);
$flyweightBookShelf1->addBook($flyweightBook2);

echo 'Test 1: menunjukkan kedua buku itu adalah buku yang sama<br>';

if ($flyweightBook1 === $flyweightBook2) {
    echo '1 dan 2 sama<br>';
} else {
    echo '1 dan 2 tidak sama<br>';    
}

writeln('test 2 - dengan satu buku pada satu diri dua kali');
writeln($flyweightBookShelf1->showBooks());
writeln('');

$flyweightBookShelf2 =  new FlyweightBookShelf(); 
$flyweightBook1 = $flyweightFactory->getBook(2);  
$flyweightBookShelf2->addBook($flyweightBook1);
$flyweightBookShelf1->addBook($flyweightBook1);

writeln('test 3 - rak buku satu');
writeln($flyweightBookShelf1->showBooks());
writeln('');

writeln('test 3 - rak buku dua');
writeln($flyweightBookShelf2->showBooks());
writeln('');

writeln('END TESTING FLYWEIGHT PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}
?>