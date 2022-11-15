<?php
//$this kullanımı-constract fonk-inheritance kullanımı-override kullanımı-visibility örnekleri.
class varlık{

    public $boy=120;
    public $kilo;
    public $yas;
    public $isim="Kopekler";
    

    function __construct()
    {
        //echo "Selemlar ".$this->isim. "<br>" ;
    }

    public function kosmak ()
    {
       echo $this->isim." koşar<br>";
    }
    protected function yurumek ()
    {
        echo $this->isim." yürür<br>";
    }
    private function uyumak ()
    {
        echo $this->isim." uyur";
    }
    public function konusmak ()
    {
        $this->uyumak();
        echo "<br>".$this->isim." konuşur<br>";
    }

    public function __destruct()
    {
        echo "Güle güle...";
    }
} 
class hayvanlar extends varlık{

    public function yemekyeme()
    {
       echo $this->isim." yemek yer <br>";
    }
    public function kosmak()
    {
        $this->yurumek();
        echo $this->isim." Hızlı koşar<br>"; 
    }

}

$varlık = new hayvanlar();
$varlık->yemekyeme();
$varlık->kosmak();
$varlık->konusmak();

?>