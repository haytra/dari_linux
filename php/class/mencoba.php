<?php 
class nayu{

    public $saya = "hadi",
            $hadi = "bayu",
            $saputra = "saputra";


    public function __construct($saya,$hadi,$saputra) {
        $this->saya = $saya;
        $this->hadi = $hadi;
        $this->saputra = $saputra;
    }
    public function daya () {
        return "$this->saya $this->hadi $this->saputra";
     }
}   

$hayuluh = new nayu("hadi", "bayu", "saputra");
echo $hayuluh->daya();





?>