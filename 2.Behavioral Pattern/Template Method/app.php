<?php
// https://sourcemaking.com/design_patterns/template_method/php

abstract class TemplateAbstract{
    // the template method 
    // set up a general algoritm for the whole class
    public final function showBookTitle($book_in){
        $title  = $book_in->getTitle();
        $author = $book_in->getAuthor();
        $processedTitle = $this->processedTitle($title);
        $processedAuthor = $this->processedAuthor($author);


    }
}