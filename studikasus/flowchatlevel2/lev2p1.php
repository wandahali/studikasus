<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>
<?php
$bilangan = array();
for ($i = 1; $i <= 100; $i++) {
    echo $bilangan[$i] = rand(1, 100);
    echo "<br>";
}

$max = $bilangan[1];
for ($i = 2; $i <= 100; $i++) {
    if ($bilangan[$i] > $max) {
        $max = $bilangan[$i];
    }
}

echo "bilangan terbesar adalah :" . $max;
?>