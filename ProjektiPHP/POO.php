<?php

//Implementimet 3 klasa 3 objekte,konstruktori dhe dekonstruktori,Enkalpsulimi,Trashegimia
class Antaripare{
    private $emri,$mbiemri;

    public function setemri($emri){
        $this->emri=$emri;
    }
    public function setmbiemri($mbiemri){
        $this->mbiemri=$mbiemri;
    }
    public function getemri(){
        return $this->emri;
    }
    public function getmbiemri(){
        return $this->mbiemri;
    }
    public function emriplote(){
        echo "Antari i pare:".$this->emri."Mbiemri:".$this->mbiemri."<br>";
    }
}
class Antaridyte{
    protected $emri,$mbiemri;

    public function __construct($emri,$mbiemri){
        $this->emri=$emri;
        $this->mbiemri=$mbiemri;
    }
    public function emriplote(){
        echo "Antari i dyte:".$this->emri." ".$this->mbiemri."<br>";
    }
}
class Antari3 extends Antaridyte{
    public $Universiteti;

    public function __construct($emri,$mbiemri,$Universiteti){
        $this->Universiteti=$Universiteti;

        parent::__construct($emri,$mbiemri);
    }
    public function emriplote(){
        echo "Antari i fundit:".$this->emri." ".$this->mbiemri." Universiteti:".$this->Universiteti;
    }
    public function __descruct(){
        echo "Dekonstruktori u thirr";
    }

}
$obj1=new Antaripare;
$obj1->setemri('Ndriqim');
$obj1->setmbiemri('Muhadri');
echo $obj1->emriplote();

$obj2=new Antaridyte('Ndriqim','Hajrullahu');
echo $obj2->emriplote();

$obj3=new Antari3('Muhamed','Zahiri','Universiteti i Prishtines');
echo $obj3->emriplote();
