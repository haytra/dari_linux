<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <table border="1" cellpadding = "40px" cellspacing = "0">
    <?php
    // echo"hello <b>world";
    // var_dump("ini saya")
    //arimatika
    // $y = 7;
    // $x = 9;
    // echo $y * $x
    // $saya = "saya adalah";
    // $di = "hadi";
    // echo $saya ."". $di;
    //operato asigmen
    // $x = 7;
    // $x += 9;
    // echo $x
    // $saya = "saya";
    // $saya .= "hadi";
    // echo $saya;
    //operator perbandingan
    // var_dump( 1 > 3)
    //operator indetitas
    // var_dump(3 === "3")
    //logika
    // $x = 10;
    // // var_dump($x < 40 && $x % 2 == 0);
    // var_dump($x < 5 || $x % 2 == 0);

    // for ($i = 0; $i < 5; $i++) {
    //     echo "heloword <br>";
    // }   
    // $i = 0;
    // while ($i < 5) {
    //     echo "helo <br>";
    //     $i++;
    // }
    // $i = 10;
     do {
         echo "halooo <br>";
         $i++;
     }
     while ($i < 20);
     for ($l = 1; $l <= 8; $l++ ){
         echo "<tr>";
         for ($h = 1; $h <=8; $h++)
         {
         echo "<td>$l,$h</td>";
         }
         echo "</tr>";
     }
    ?>
    <?php for ($k = 3; $k <= 8; $k++): ?>  
    <tr>
        <?php for ($l = 3; $l <= 8; $l++): ?>
        <td> <?= "$k,$l" ?> </td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>
    
    </table>
</body>
</html>