<?php
    if (isset($_COOKIE['nazwa'])) {
        $licznik = $_COOKIE['nazwa'] + 1;
    } else{
        $licznik = 1;
    }
    setcookie('nazwa', $licznik, time() + 60 * 60 * 60);
    echo $licznik;

    $file = fopen("licznik.txt", "w");
    fwrite($file, $licznik);
    fclose($file); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>