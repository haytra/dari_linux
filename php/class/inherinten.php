<?php
class dadi{
    public $saya,
           $janji,
           $kita;
    

public function sayur(){

    return "$this->janji $this->saya $this->kita" ;
}
public function __construct($saya, $janji, $kita){
    $this->saya = $saya;
    $this->janji = $janji;
    $this->kita = $kita;
}
}
class cemilan extends dadi{
    public function sayur(){
       return "$this->janji $this->saya $this->kita" ;
}
    }


$cami = new dadi("kami ", "adalah", "haytra");
$cemilan = new dadi("kami ", "adalah", "haytra");
echo "hallo" .$cemilan->sayur();
echo "<br>";
echo "nama ". $cami->sayur();

?>