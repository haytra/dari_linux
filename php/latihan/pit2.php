<h1>ini adalah class objek</h1>
<?php

class sudo {


}
$a = new sudo();
$b = new sudo();
$c = new sudo();
$d = new sudo();
$e = new sudo();


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($e);
?>
<h1>ini adalah objek dan method</h1>
<?php
class Pit3 {
    public $saya = "saya",
            $aada = "uy",
            $ya = "haytra";
}
$b = new Pit3();
print_r($b)
?>
<h1>ini adalah objek dan method klo kita mau menggantinya</h1>
<?php
class Pit2 {
    public $saya = "saya",
            $aada = "uy",
            $ya = "haytra";
}
$a = new Pit2();
$a->saya = "naruto";
print_r($a)

?>