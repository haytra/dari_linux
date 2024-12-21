
<?php 
// propety    
    class saya{
        public $satuan = "satu",
               $dua = "dua",
               $tiga = "tiga";
//method
               public function uy(){
                return  "halooword";
            }
        }
?>
<?php
    $kita = new saya();
    $kita->satuan = "saya";
    $kita->dua = "adalah";
    $kita->tiga = "haytra";   

    print_r($kita);
    echo"<br>";
    echo "ok ini profil ku : $kita->satuan";
    echo "<br>";
    echo "nama saya adalah : $kita->tiga";
    echo "<br>";
    echo $kita->uy();

    
?>
