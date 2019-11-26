<?php

abstract class AbstractObserver
{
    abstract function update( AbstractSubject $subject_in);
}

abstract class AbstractSubject
{
    abstract function attach(AbstractObserver $observer_in);
    abstract function detach(AbstractObserver $observer_in);
    abstract function notify();
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

class PatternObserver extends AbstractObserver
{
    public function __construct()
    {

    }

    public function update(AbstractSubject $subject)
    {
        writeln('* IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT *');
        writeln(' new favorite pattern: '.$subject->getFavorites() );
        writeln('* IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER *');
    }
}

class PatternSubject extends AbstractSubject{

    private $favoritePattern = NULL;
    private $observers = array();

    function __construct()
    {

    }

    function attach(AbstractObserver $observer_in)
    {
        //bisa juga digunakan array_push($this->observer, $observer_in)
        $this->observers[] = $observer_in;
    }

    function detach(AbstractObserver $observer_in)
    {
        //$key = array_search($observer_in, $this->observer)

        foreach($this->observers as $okey => $oval){
            if($oval == $observer_in){
                unset($this->observers[$okey]);
            }
        }

    }

    function notify()
    {
        foreach($this->observers as $obs)
        {
            $obs->update($this);
        }
    }

    function updateFavorites($newFavorites)
    {
        $this->favorites = $newFavorites;
        $this->notify();
    }

    function getFavorites()
    {
        return $this->favorites;
    }
}

writeln('BEGIN TESTING OBSERVER PATTERN');
writeln('');
$patternGossiper = new PatternSubject();
$patternGossipFan = new PatternObserver();
$patternGossiper->attach($patternGossipFan);
$patternGossiper->updateFavorites('abstract factory, decorator, visitor');
writeln('');
$patternGossiper->updateFavorites('abstract factory, observer, decorator');
writeln('');
$patternGossiper->detach($patternGossipFan); // menghentikan function 
$patternGossiper->updateFavorites('abstract factory, observer, paisley');
writeln('END TESTING OBSERVER PATTERN');