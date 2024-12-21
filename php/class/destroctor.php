<?php 
class saya{
    public $dadu, 
    $dadu2,
    $dadu3,
    $dadu4;

     public function dalang(){
         return "$this->dadu, $this->dadu2, $this->dadu3, $this->dadu4";
     }
    public function __construct($dadu, $dadu2, $dadu3, $dadu4,){
        $this->dadu = $dadu;
        $this->dadu2 = $dadu2;
        $this->dadu3 = $dadu3;
        $this->dadu4 = $dadu4;
    }
    public function __destruct(){
        echo $this->dadu = "haytra";
    }
}

$haytra = new saya("hadi", "bayu", "saputra", "haytra"."<br>");
echo $haytra->dalang();
unset($dadu);
?>