<?php
$angka = [2,9,89,79,99,99,600,900];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{
            background-color: red;
            line-height: 50px;
            width: 50px;
            text-align: center;
            padding-left: 2px;
            float: left;
            margin: 3px;
        }
    </style>
    <title>Document</title>
</head>
<body>
   <?php for ($i=0; $i < 8; $i++) { ?>
    <div><?php echo $angka[$i]; ?></div>
   <?php } ?>




</body>
</html>