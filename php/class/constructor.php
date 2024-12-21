<?php
class kayu{
    public $saya,
            $gaya,
            $uyab;

                // method
            public function panggil(): string{
                return "$this->saya $this->gaya $this->uyab ". "<br>";}

                //constructor
                public function __construct($saya="hadi", $gaya="bayu", $uyab = "saputra"){
                   $this->saya = $saya;
                   $this->gaya = $gaya;
                   $this->uyab = $uyab;

            }
        }


        //objec
        $mamu=new kayu("saya","adalah","haytra");
        // $mamu->saya ="haytra";
        // $mamu->gaya ="davia";
        // $mamu->uyab = "intra";

        $produk=new kayu("saya","ini","haytra");
        // $produk->saya = "hadi";
        // $produk->gaya = "bayu";
        // $produk->uyab = "saputra";
        $produk2= new kayu();
        echo $produk2->panggil();
        echo "nama saya :". $produk->panggil();
        echo "nama :" .$mamu->panggil();
        // echo "nama saya : ".$mamu->saya, $mamu->gaya, $mamu->uyab;
?>