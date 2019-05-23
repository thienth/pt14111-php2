<?php
abstract class Animal{
    public function getname(){
        echo 12;
    }

    abstract protected function run();
}

interface SinhCon{
    public function sinhcon();
    public function choansua();
}


class Duck extends Animal{


    protected function run()
    {
        // TODO: Implement run() method.
    }
}

interface SongTrenCay{
    public function leocay();
}

trait dichuyen{
    function chaybangchan(){
        echo "em dang chay";
    }
}

class Khi implements SinhCon, SongTrenCay {

    public function __construct()
    {
    }

    public function choansua()
    {
        // TODO: Implement choansua() method.
    }

    public function sinhcon()
    {
        // TODO: Implement choansua() method.
    }

    public function leocay()
    {
        // TODO: Implement leocay() method.
    }
}
class Dog extends Animal implements SinhCon{
    use dichuyen;
    protected function run()
    {
        // TODO: Implement run() method.
    }

    public function __construct()
    {
    }

    public function choansua()
    {
        // TODO: Implement choansua() method.
    }
    public function sinhcon()
    {
        // TODO: Implement choansua() method.
    }


}

$d = new Dog();
$d->chaybangchan();
