<?php
// Masalah
// "Pengerasan arteri perangkat lunak" telah terjadi dengan menggunakan subclassing
// dari kelas dasar abstrak untuk memberikan implementasi alternatif.
// Ini mengunci waktu kompilasi yang mengikat antara antarmuka dan implementasi.
// Abstraksi dan implementasi tidak dapat diperpanjang atau disusun secara independen.

abstract class BridgeBook
{
    private $bbAuthor;
    private $bbTitle;
    private $bbImplementasi;

    function __construct($author_in, $title_in, $choice_in)
    {
        $this->bbAuthor = $author_in;
        $this->bbTitle  = $title_in;

        if('STARS' == $choice_in)
        {
            $this->bbImplementasi = new BridgeBookStarsImp();
        }else{
            $this->bbImplementasi = new BridgeBookCapsImp();
        }
    }

    function showAuthor()
    {
        return $this->bbImplementasi->showAuthor($this->bbAuthor);
    }

    function showTitle()
    {
        return $this->bbImplementasi->showTitle($this->bbTitle);
    }
}

class BridgeBookAuthorTitle extends BridgeBook
{
    function showAuthorTitle()
    {
        return $this->showAuthor() . "'s " .$this->showTitle();
    }
}

class BridgeBookTitleAuthor extends BridgeBook
{
    function showTitleAuthor()
    {
        return $this->showTitle() . ' by '. $this->showAuthor();
    }
}

abstract class BridgeBookImp
{
    abstract function showAuthor($author);
    abstract function showTitle($title);
}

class BridgeBookCapsImp extends BridgeBookImp
{
    function showAuthor($author_in)
    {
        return strtoupper($author_in);
    }
    
    function showTitle($title_in)
    {
        return strtoupper($title_in);
    }
}

class BridgeBookStarsImp extends BridgeBookImp
{
    function showAuthor($author_in)
    {
        return Str_replace(" ","*",$author_in);
    }

    function showTitle($title_in)
    {
        return Str_replace(" ","*",$title_in);
    }    
}

writeln('BEGIN TESTING BRIDGE PATTERN');
writeln('');

writeln('Test 1 - judul penulis dengan topi');
$book = new BridgeBookAuthorTitle('Tria bagus', 'Desain pattern', 'CAPS');
writeln($book->showAuthorTitle());
writeln('');

writeln('Test 2 - judul penulis dengan bintang');
$book = new BridgeBookAuthorTitle('Tria Bagus', 'Desain pattern', 'STARS');
writeln($book->showAuthorTitle());
writeln('');

writeln('Test 3 - Penulis judul dengan topi');
$book = new BridgeBookTitleAuthor('Tria Bagus', 'Desain pattern', 'CAPS');
writeln($book->showTitleAuthor());
writeln('');

writeln('Test 3 - Penulis judul dengan bintang');
$book = new BridgeBookTitleAuthor('Tria Bagus', 'Desain pattern', 'STARS');
writeln($book->showTitleAuthor());
writeln('');

writeln('END TESTING BRIDGE PATTERN');


function writeln($line_in) 
{
    echo $line_in."<br/>";
}