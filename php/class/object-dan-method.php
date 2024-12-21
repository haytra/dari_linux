<?php 
    // class cobba{
    
    
    // }
    //ini adalah object
    // $a = new cobba();
    // $b =new cobba();

    // var_dump($a);
    // var_dump($b);

    
    //mulai masuk property
    // class mulai {
    //     public $sistem = "ini adalah",
    //            $kita = "jaringan";
    // }
    // $kalau = new mulai();
    // $kalau->kita = "saya";
    // print_r ($kalau);

    // echo"<br>";

    // $kalau2 = new mulai ();
    // $kalau2 -> sistem = "apaan";
    // var_dump( $kalau2);

    //method
//     class method{
//         public $dadu = "ini  dia",
//                 $saya = "si juragan",
//                 $haytra = "haytra";

//                 public function mmmethod (){
//                     return "saya adalah haytra";
//                 }
//     }

// $kiata = new method();
// echo $kiata ->mmmethod();

//cara memanggil object dengan method
class kiya{
    public $kiu = "saya",
            $haloo ="adalah",
            $gaga = "ganteng",
            $ragu = "hayttra";

    public function panggil(){
        return "$this->kiu $this->haloo $this->ragu $this->gaga". "<br>";

    }
}

$kyai = new kiya();
echo $kyai->panggil();

class koka{
    public $satu = 1,
            $dua = 2,
            $tiga = 3;

    public function halio(){
        return "$this->satu, $this->tiga, $this->dua" ."\n"
                ."saya punya nomor";
        

}
}
$daji = new koka();
echo $daji->halio();
?>