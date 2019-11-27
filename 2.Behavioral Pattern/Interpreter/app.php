<?php

class Interpreter
{
    private $bookList;

    public function __construct($bookListIn)
    {
        $this->bookList = $bookListIn;
    } 

    public function interpret($stringIn)
    {
        $arrayIn = explode(" ", $stringIn);
        $returnString = NULL;

        //buka array yang mem validasi
        //dan jika mungkin memanggil metode buku
        //bisa menggunakan refactoring , beberapa logika duplikat    
        
        if('book' == $arrayIn[0] ){
            if('author' == $arrayIn[1] ){
                if(is_numeric($arrayIn[2] ) ){
                    
                    $book = $this->bookList->getBook($arrayIn[2] );

                    if(NULL == $book){
                        $returnString = 'Tidak di proses, tidak ada buku # '.$arrayIn[2];
                    }else{
                        $returnString = $book->getAuthor();
                    }//NULL == $book
                
                }elseif ('title' == $arrayIn[2] ) {

                    if(is_numeric($arrayIn[3]) ){
                        $book = $this->bookList->getBook( $arrayIn[3] );
                    
                        if(NULL == $book){
                            $returnString = 'Tidak di proses, tidak ada buku # '.$arrayIn[3];
                        }else{
                            $returnString = $book->getAuthorAndTitle();
                        }//NULL == $book

                    }else{
                        $returnString = 'Tidak di proses, buku # harus numeric.';
                    }//is_numeric($arrayIn[3])
                
                }else{
                    
                    $returnString = 'Tidak di proses, buku # harus numeric.';
                }//is_numeric($arrayIn[2])
            }//author == $arrayIn[1]

            if('title' == $arrayIn[1]){

                if(is_numeric($arrayIn[2]) ){

                    $book = $this->bookList->getBook($arrayIn[2]);
                
                    if(NULL == $book){
                        $returnString = 'Tidak di proses, tidak ada buku # '.$arrayIn[2];
                    }else{
                        $returnString = $book->getTitle();
                    }//NULL == $book
                
                }else{

                    $returnString = 'Tidak di proses, buku # harus numeric';
                }//is_numeric($arrayIn[2])
            }//title == $arrayIn[1]
        
        }else{

            $returnString = 'Tidak di proses, hanya memproses buku author #, buku title #, atau buku author title #';
        }//book == $arrayIn[0]
    
        return $returnString;
    }
}

class bookList
{
    private $books = array();
    private $bookCount = 0;

    public function __construct()
    {

    }

    public function getBookCount()
    {
        return $this->bookCount;
    }

    private function setBookCount($newCount)
    {
        $this->bookCount = $newCount;
    }

    public function getBook($bookNumberToGet)
    {

        if( (is_numeric($bookNumberToGet)) && ($bookNumberToGet <= $this->getBookCount() ) ){
            return $this->books[$bookNumberToGet];
        }else{
            return NULL;
        }

    }

    public function addBook(Book $book_in)
    {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book_in;

        return $this->getBookCount();
    }

    public function removeBook(Book $book_in)
    {
        $counter = 0;

        while(++$counter <= $this->getBookCount() ){
            
            if($book_in->getAuthorAndTitle() == $this->books[$counter]->getAuthorAndTitle() ){
                
                for($x = $counter; $x < $this->getBookCount(); $x++){
                    $this->books[$x] = $this->books[$x +1];
                }
                $this->setBookCount($this->getBookCount() - 1 );
            }
        }

        return $this->getBookCount();
    }
}

class book
{
    private $author;
    private $title;

    function __construct($title_in, $author_in)
    {
        $this->author = $author_in;
        $this->title = $title_in;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getAuthorAndTitle()
    {
        return $this->getTitle(). ' by '. $this->getAuthor();
    }
}

writeln('BEGIN TESTING INTERPRETER PATTERN');
writeln('');

// muatkan BookList untuk data uji
$bookList = new bookList();
$inBook1 = new book('PHP DESIGN PATTERN', 'TRIA BAGUS');
$inBook2 = new book('SQL DESIGN PATTERN', 'NUR TAUFIL');

$bookList->addBook($inBook1);
$bookList->addBook($inBook2);

$interpreter = new Interpreter($bookList);

writeln('test 1 - permintaan tidak valid hilang "book"');
writeln($interpreter->interpret('author 1'));
writeln('');

writeln('test 2 - permintaan penulis book yang valid');
writeln($interpreter->interpret('book author 1'));
writeln('');

writeln('test 3 - permintaan penulis title yang valid');
writeln($interpreter->interpret('book title 2'));
writeln('');

writeln('test 4 - permintaan title author book yang valid');
writeln($interpreter->interpret('book author title 1'));
writeln('');

writeln('test 5 - permintaan tidak valid book number');
writeln($interpreter->interpret('book title 3'));
writeln('');

writeln('test 6 - permintaan tidak valid dengan tidak ada numeric book number');
writeln($interpreter->interpret('book title one'));
writeln('');

writeln('END TESTING INTERPRETER PATTERN');
function writeln($line_in) {
    echo $line_in."<br/>";
}