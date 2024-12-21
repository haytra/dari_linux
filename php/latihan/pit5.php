<?php
class lalu {
    public $apa = "100",
           $ini = "200",
           $ada = "300";

    public function ambillabel() {
        return  "$this->ini, $this->apa";
    }
}

$lalu = new $yasadalah();
$lalu->apa = "apaa";
$lalu->ini = "si";
$lalu->ada = "haytra";

echo"<hr>";

$aku = new $yasadalah();
$aku->apa = "aku";
$aku->ada = "adalah";
$aku->ini = "haytra";

echo "pertama : " . $lalu->ambillabel();
echo "<br>";
echo "kedua : " . $aku->ambillabel();
?>